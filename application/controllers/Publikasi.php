<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     // $this->load->model('publikasimodel');
    // }

    public function index()
    {
        // $jumlah_data = $this->publikasimodel->jumlah_data();
        // $this->load->library('pagination');
        // $config['base_url'] = base_url() . 'publikasi/index';
        // $config['total_rows'] = $jumlah_data;
        // // $config['per_page'] = 9;
        // $from = $this->uri->segment(3);

        // // Membuat Style pagination untuk BootStrap v4
        // $config['next_link'] = 'Selanjutnya';
        // $config['prev_link'] = 'Sebelumnya';
        // $config['first_link'] = 'Awal';
        // $config['last_link'] = 'Akhir';
        // $config['full_tag_open'] = '<ul class="pagination">';
        // $config['full_tag_close'] = '</ul>';
        // $config['num_tag_open'] = '<li>';
        // $config['num_tag_close'] = '</li>';
        // $config['cur_tag_open'] = '<li class="active"><a href="#">';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';
        // $config['next_tag_open'] = '<li>';
        // $config['next_tag_close'] = '</li>';
        // $config['last_tag_open'] = '<li>';
        // $config['last_tag_close'] = '</li>';
        // $config['first_tag_open'] = '<li>';
        // $config['first_tag_close'] = '</li>';

        // $this->pagination->initialize($config);
        // $data['foto'] = $this->publikasimodel->data($config['per_page'], $from);


        $data['foto'] = $this->db->get('foto')->result_array();

        $data['title'] = 'Publikasi - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'publikasi';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/publikasi/publikasi', $data);
        $this->load->view('template/footer');
    }

    public function advokasi()
    {

        $data['title'] = 'Advokasi - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'publikasi';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/publikasi/advokasi', $data);
        $this->load->view('template/footer');
    }
}
