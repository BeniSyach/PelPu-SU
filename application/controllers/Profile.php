<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Profil - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/profile', $data);
        $this->load->view('template/footer');
    }
}
