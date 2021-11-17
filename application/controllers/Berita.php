<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('beritamodel');
    }

    public function index()
    {
        $jumlah_data = $this->beritamodel->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'berita/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(3);

        // Membuat Style pagination untuk BootStrap v4
        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['berita'] = $this->beritamodel->data($config['per_page'], $from);



        // $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Berita Utama - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'berita';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/berita/berita', $data);
        $this->load->view('template/footer');
    }

    public function detail_berita($id)
    {
        $this->load->helper('html');
        $this->db->join('user', 'user.id_user=berita.user_id');
        $this->db->order_by('berita.tanggal', 'desc');
        $data['berita'] = $this->db->get_where('berita', [
            'berita.id' => $id
        ])->row_array();

        // $data['semua_berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Detail Berita - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'berita';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/berita/detail_berita', $data);
        $this->load->view('template/footer');
    }

    public function majalah()
    {
        $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Majalah - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'berita';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/berita/majalah', $data);
        $this->load->view('template/footer');
    }

    public function paper()
    {
        $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Paper - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'berita';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/berita/paper', $data);
        $this->load->view('template/footer');
    }
}
