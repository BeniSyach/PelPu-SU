<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Kontak - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'kontak';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/kontak/contact', $data);
        $this->load->view('template/footer');
    }
}
