<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Informasi - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/informasi', $data);
        $this->load->view('template/footer');
    }
}
