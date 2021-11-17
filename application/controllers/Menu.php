<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pelayanan Publik Sumatera Utara';
        $data['active'] = 'menu';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/menu_utama', $data);
        $this->load->view('template/footer');
    }
}
