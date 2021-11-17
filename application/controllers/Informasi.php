<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function index()
    {
        $data['buku'] = $this->db->get('buku')->result_array();
        $data['title'] = 'Informasi Dan Edukasi - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'informasi';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/informasi/informasi', $data);
        $this->load->view('template/footer');
    }
}
