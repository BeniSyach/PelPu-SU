<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['title'] = 'Dashboard Admin - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/dashboard', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }
    public function berita()
    {

        $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Menu Berita - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/berita', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_berita()
    {


        $data['title'] = 'Form Tambah Berita - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/tambah_berita', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function Ubah_berita($id)
    {
        $data['berita'] = $this->db->get_where('berita', ['id' => $id])->row_array();

        $data['title'] = 'Form Ubah Berita - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/ubah_berita', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }


    public function hapus_berita($id)
    {
    }

    public function foto()
    {
        $data['foto'] = $this->db->get('foto')->result_array();

        $data['title'] = 'Menu Foto - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/foto', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_foto()
    {
        $data['title'] = 'Form Tambah Foto - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/tambah_foto', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function ubah_foto($id)
    {
        $data['foto'] = $this->db->get_where('foto', ['id' => $id])->row_array();

        $data['title'] = 'Form Ubah Foto - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/Ubah_foto', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function hapus_foto($id)
    {
    }

    public function video()
    {
        $data['video'] = $this->db->get('video')->result_array();

        $data['title'] = 'Menu Video - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/video', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_video()
    {
        $data['title'] = 'Tambah Video - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/tambah_video', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function ubah_video($id)
    {
        $data['video'] = $this->db->get_where('video', ['id' => $id])->row_array();

        $data['title'] = 'Tambah Video - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/ubah_video', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function hapus_video($id)
    {
    }

    public function buku()
    {
        $data['buku'] = $this->db->get('buku')->result_array();

        $data['title'] = 'Menu Buku - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/buku', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_buku()
    {
    }

    public function ubah_buku($id)
    {
    }

    public function hapus_buku($id)
    {
    }
}
