<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publikasi extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Publikasi - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/publikasi', $data);
        $this->load->view('template/footer');
    }
}
