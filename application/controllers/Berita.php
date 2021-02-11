<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Berita Utama - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/berita', $data);
        $this->load->view('template/footer');
    }
}
