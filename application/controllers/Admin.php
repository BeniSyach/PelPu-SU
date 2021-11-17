<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('form_validation');
        $this->load->model('beritamodel');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['active'] = 'user';
        $data['title'] = 'Dashboard Admin - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/dashboard', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function berita()
    {
        $data['berita'] = $this->db->get_where('berita', [
            'user_id' => $this->session->userdata('id_user')
        ])->result_array();
        $data['active'] = 'berita';
        $data['title'] = 'Menu Berita - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/berita/berita', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_berita()
    {

        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        // $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
        // $this->form_validation->set_rules('foto', 'foto', 'required|trim');
        $this->form_validation->set_rules('isi', 'isi', 'required|trim');
        $data['active'] = 'berita';
        $data['tags'] = $this->db->get('tag_berita')->result_array();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Tambah Berita - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/berita/tambah_berita', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $tags = $this->input->post('tags');
            $tanggal = date("Y-m-d");
            $id = $this->session->userdata('id_user');

            // Jika Ada gambar yang di upload
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    //  $gambar_lama = $data['user']['gambar'];
                    //  if ($gambar_lama != 'default.jpg') {
                    //      unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    //  }
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/berita');
                }
            }

            $data = [
                'user_id' => $id,
                'judul' => $judul,
                'tanggal' => $tanggal,
                'isi' => $isi,
                'foto' => $foto,
                'tags' => $tags
            ];

            $this->db->insert('berita', $data);

            $data_1 = [
                'user_id' => $id,
                'judul' => $judul,
                'tanggal' => $tanggal,
                'isi' => $isi
            ];

            $this->db->insert('pemberitahuan', $data_1);

            $this->session->set_flashdata('message', '<div class="alert alert-success"  role="alert">
            Berita Telah Di Tambahkan !!!
          </div>');
            redirect('admin/berita');
        }
    }

    public function Ubah_berita($id)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        // $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
        // $this->form_validation->set_rules('foto', 'foto', 'required|trim');
        $this->form_validation->set_rules('isi', 'isi', 'required|trim');
        $data['active'] = 'berita';
        $data['tags'] = $this->db->get('tag_berita')->result_array();
        $data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();

        if ($this->form_validation->run() == false) {


            $data['title'] = 'Form Ubah Berita - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/berita/ubah_berita', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $isi = $this->input->post('isi');
            $tags = $this->input->post('tags');
            $tanggal = $this->input->post('tanggal');

            // Jika Ada gambar yang di upload
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $gambar_lama = $data['berita']['foto'];
                    if ($gambar_lama != $gambar_lama) {
                        unlink(FCPATH . 'assets/img/foto/' . $gambar_lama);
                    }
                    $foto = $this->upload->data('file_name');
                    $this->db->set('foto', $foto);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/berita');
                }
            }

            $this->db->set('judul', $judul);
            $this->db->set('tanggal', $tanggal);
            $this->db->set('isi', $isi);
            $this->db->set('tags', $tags);
            $this->db->where('id', $id);
            $this->db->update('berita');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berita Sudah Di Ubah!!!
              </div>');
            redirect('admin/berita');
        }
    }

    public function hapus_berita($id)
    {
        $where = array('id' => $id);
        $this->beritamodel->hapus_data($where, 'berita');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berita Sudah Di Hapus!!!
          </div>');
        redirect('admin/berita');
    }

    public function foto()
    {
        $data['foto'] = $this->db->get_where('foto', [
            'user_id' => $this->session->userdata('id_user')
        ])->result_array();
        // $data['foto'] = $this->db->get('foto')->result_array();
        $data['active'] = 'foto';
        $data['title'] = 'Menu Foto - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/foto/foto', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_foto()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $data['active'] = 'foto';
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Tambah Foto - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/foto/tambah_foto', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $tag = "foto";
            $tanggal = date("Y-m-d");
            $id = $this->session->userdata('id_user');

            // Jika Ada gambar yang di upload
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    //  $gambar_lama = $data['user']['gambar'];
                    //  if ($gambar_lama != 'default.jpg') {
                    //      unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    //  }
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/berita');
                }
            }
            $data = [
                'user_id' => $id,
                'Judul' => $judul,
                'url' => $foto,
                'tag' => $tag,
                'tanggal' => $tanggal
            ];

            $this->db->insert('foto', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Foto Telah Di Tambahkan !!!
          </div>');
            redirect('admin/foto');
        }
    }

    public function ubah_foto($id)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $data['active'] = 'foto';
        $data['foto'] = $this->db->get_where('foto', ['id' => $id])->row_array();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Ubah Foto - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/foto/Ubah_foto', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $tanggal = $this->input->post('tanggal');;

            // Jika Ada gambar yang di upload
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $gambar_lama = $data['foto']['url'];
                    if ($gambar_lama != $gambar_lama) {
                        unlink(FCPATH . 'assets/img/foto/' . $gambar_lama);
                    }
                    $foto = $this->upload->data('file_name');
                    $this->db->set('url', $foto);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/foto');
                }
            }

            $this->db->set('Judul', $judul);
            $this->db->set('tanggal', $tanggal);
            $this->db->where('id', $id);
            $this->db->update('foto');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Foto Sudah Di Ubah!!!
              </div>');
            redirect('admin/foto');
        }
    }

    public function hapus_foto($id)
    {
        $where = array('id' => $id);
        $this->beritamodel->hapus_data($where, 'foto');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Foto Sudah Di Hapus!!!
          </div>');
        redirect('admin/foto');
    }

    public function video()
    {
        $data['video'] = $this->db->get_where('foto', [
            'user_id' => $this->session->userdata('id_user')
        ])->result_array();
        // $data['video'] = $this->db->get('foto')->result_array();
        $data['active'] = 'video';
        $data['title'] = 'Menu Video - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/video/video', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_video()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $data['active'] = 'video';
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Video - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/video/tambah_video', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $tag = "video";
            $tanggal = date("Y-m-d");
            $id = $this->session->userdata('id_user');

            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    //  $gambar_lama = $data['user']['gambar'];
                    //  if ($gambar_lama != 'default.jpg') {
                    //      unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    //  }
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/video');
                }
            }

            $data = [
                'user_id' => $id,
                'Judul' => $judul,
                'url' => $foto,
                'tag' => $tag,
                'tanggal' => $tanggal
            ];

            $this->db->insert('foto', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Video Telah Di Tambahkan !!!
          </div>');
            redirect('admin/video');
        }
    }

    public function ubah_video($id)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $data['active'] = 'video';
        $data['video'] = $this->db->get_where('foto', ['id' => $id])->row_array();

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Video - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/video/ubah_video', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $tanggal = $this->input->post('tanggal');

            // Jika Ada gambar yang di upload
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'mp4|3gp|flv';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $gambar_lama = $data['video']['url'];
                    if ($gambar_lama != $gambar_lama) {
                        unlink(FCPATH . 'assets/img/foto/' . $gambar_lama);
                    }
                    $foto = $this->upload->data('file_name');
                    $this->db->set('url', $foto);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/video');
                }
            }

            $this->db->set('Judul', $judul);
            $this->db->set('tanggal', $tanggal);
            $this->db->where('id', $id);
            $this->db->update('foto');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                  Foto Sudah Di Ubah!!!
                </div>');
            redirect('admin/foto');
        }
    }

    public function hapus_video($id)
    {
        $where = array('id' => $id);
        $this->beritamodel->hapus_data($where, 'foto');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Video Sudah Di Hapus!!!
          </div>');
        redirect('admin/foto');
    }

    public function buku()
    {
        $data['buku'] = $this->db->get_where('buku', [
            'user_id' => $this->session->userdata('id_user')
        ])->result_array();
        // $data['buku'] = $this->db->get('buku')->result_array();
        $data['active'] = 'buku';
        $data['title'] = 'Menu Buku - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/buku/buku', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_buku()
    {
        $this->form_validation->set_rules('Nama_buku', 'Nama Buku', 'required|trim');
        $this->form_validation->set_rules('ringkasan_buku', 'Ringkasan Buku', 'required|trim');
        $data['active'] = 'buku';
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Tambah Buku - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/buku/tambah_buku', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $Nama_buku = $this->input->post('Nama_buku');
            $ringkasan_buku = $this->input->post('ringkasan_buku');
            $tanggal = date("Y-m-d");
            $id = $this->session->userdata('id_user');

            $upload_buku = $_FILES['url_buku']['name'];

            if ($upload_buku) {
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('url_buku')) {

                    //  $gambar_lama = $data['user']['gambar'];
                    //  if ($gambar_lama != 'default.jpg') {
                    //      unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    //  }
                    $buku = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/buku');
                }
            }

            $data = [
                'user_id' => $id,
                'Nama_buku' => $Nama_buku,
                'url_buku' => $buku,
                'tanggal' => $tanggal,
                'ringkasan_buku' => $ringkasan_buku
            ];

            $this->db->insert('buku', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Buku Telah Di Tambahkan !!!
          </div>');
            redirect('admin/buku');
        }
    }

    public function ubah_buku($id)
    {
        $this->form_validation->set_rules('Nama_buku', 'Nama Buku', 'required|trim');
        $this->form_validation->set_rules('ringkasan_buku', 'Ringkasan Buku', 'required|trim');
        $data['buku'] = $this->db->get_where('buku', [
            'id' => $id
        ])->row_array();
        $data['active'] = 'buku';
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Tambah Buku - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/buku/ubah_buku', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            $Nama_buku = $this->input->post('Nama_buku');
            $ringkasan_buku = $this->input->post('ringkasan_buku');
            $tanggal = $this->input->post('tanggal');

            $upload_buku = $_FILES['url_buku']['name'];

            if ($upload_buku) {
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['upload_path'] = './assets/img/foto/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('url_buku')) {

                    $gambar_lama = $data['buku']['url_buku'];
                    if ($gambar_lama != $gambar_lama) {
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    }
                    $buku = $this->upload->data('file_name');
                    $this->db->set('url_buku', $buku);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('admin/buku');
                }
            }

            $this->db->set('Nama_buku', $Nama_buku);
            $this->db->set('ringkasan_buku', $ringkasan_buku);
            $this->db->set('tanggal', $tanggal);
            $this->db->where('id', $id);
            $this->db->update('buku');


            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Buku Telah Di Ubah !!!
          </div>');
            redirect('admin/buku');
        }
    }

    public function hapus_buku($id)
    {
        $where = array('id' => $id);
        $this->beritamodel->hapus_data($where, 'buku');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Buku Sudah Di Hapus!!!
          </div>');
        redirect('admin/buku');
    }

    public function pemberitahuan()
    {
        $this->db->join('user', 'user.id_user=pemberitahuan.user_id');
        $data['pemberitahuan_berita'] = $this->db->get('pemberitahuan')->result_array();
        $data['active'] = '';

        $data['title'] = 'Pemberitahuan - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/pemberitahuan', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function laporan()
    {
        if ($this->session->userdata('email') == "admin@gmail.com") {
            $data['laporan'] = $this->db->get('laporan')->result_array();
        } else {
            $data['laporan'] = $this->db->get_where('laporan', [
                'user_id' => $this->session->userdata('id_user')
            ])->result_array();
        }
        $data['active'] = 'laporan';
        $data['title'] = 'Laporan - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/laporan/laporan', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambahuser()
    {
        if ($this->session->userdata('email') == "admin@gmail.com") {

            $this->form_validation->set_rules('nama', 'nama', 'required|trim');
            $this->form_validation->set_rules('email', 'email', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim');

            $data['active'] = 'tambahuser';

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Tambah User - Pelayanan Publik Sumatera Utara';
                $this->load->view('admin/template_admin/header_admin', $data);
                $this->load->view('admin/menu_admin/user/tambah-user', $data);
                $this->load->view('admin/template_admin/footer_admin');
            } else {
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $deskripsi = $this->input->post('deskripsi');
                $password = $this->input->post('password');
                $level = "1";
                $tanggal = date("Y-m-d");

                $upload_buku = $_FILES['foto_user']['name'];

                if ($upload_buku) {
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/img/foto/';
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('foto_user')) {

                        //  $gambar_lama = $data['user']['gambar'];
                        //  if ($gambar_lama != 'default.jpg') {
                        //      unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        //  }
                        $foto = $this->upload->data('file_name');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect('admin/listuser');
                    }
                }
                $data = [
                    'email' => $email,
                    'password' => $password,
                    'tanggal' => $tanggal,
                    'nama' => $nama,
                    'level' => $level,
                    'deskripsi' => $deskripsi,
                    'foto_user' => $foto
                ];


                $this->db->insert('user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                User Telah Di Tambahkan !!!
              </div>');
                redirect('admin/listuser');
            }
        } else {
            redirect('auth/blocked');
        }
    }


    public function listuser()
    {
        if ($this->session->userdata('email') == "admin@gmail.com") {
            $data['user'] = $this->db->get('user')->result_array();
            $data['active'] = 'listuser';
            $data['title'] = 'List User - Pelayanan Publik Sumatera Utara';
            $this->load->view('admin/template_admin/header_admin', $data);
            $this->load->view('admin/menu_admin/user/list-user', $data);
            $this->load->view('admin/template_admin/footer_admin');
        } else {
            redirect('auth/blocked');
        }
    }

    public function ubah_user($id)
    {
        if ($this->session->userdata('email') == "admin@gmail.com") {

            $this->form_validation->set_rules('nama', 'nama', 'required|trim');
            $this->form_validation->set_rules('email', 'email', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim');

            $data['user'] = $this->db->get_where('user', [
                'id_user' => $id
            ])->row_array();

            $data['active'] = 'listuser';
            if ($this->form_validation->run() == false) {
                $data['title'] = 'List User - Pelayanan Publik Sumatera Utara';
                $this->load->view('admin/template_admin/header_admin', $data);
                $this->load->view('admin/menu_admin/user/ubah-user', $data);
                $this->load->view('admin/template_admin/footer_admin');
            } else {
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $deskripsi = $this->input->post('deskripsi');
                $password = $this->input->post('password');
                $tanggal = date("Y-m-d");

                $upload_buku = $_FILES['foto_user']['name'];

                if ($upload_buku) {
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = '2048';
                    $config['upload_path'] = './assets/img/foto/';
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('foto_user')) {

                        $gambar_lama = $data['user']['foto_user'];
                        if ($gambar_lama != $gambar_lama) {
                            unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }
                        $foto = $this->upload->data('file_name');
                        $this->db->set('foto_user', $foto);
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect('admin/listuser');
                    }
                }

                $this->db->set('nama', $nama);
                $this->db->set('email', $email);
                $this->db->set('tanggal', $tanggal);
                $this->db->set('deskripsi', $deskripsi);
                $this->db->set('password', $password);
                $this->db->where('id_user', $id);
                $this->db->update('user');


                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                User Telah Di Ubah !!!
              </div>');
                redirect('admin/listuser');
            }
        } else {
            redirect('auth/blocked');
        }
    }

    public function hapus_user($id)
    {
        $where = array('id_user' => $id);
        $this->beritamodel->hapus_data($where, 'user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Akun Sudah Di Hapus!!!
          </div>');
        redirect('admin/listuser');
    }
}
