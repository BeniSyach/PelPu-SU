<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard Admin - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/dashboard', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }
    public function berita()
    {
        $data['title'] = 'Menu Berita - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/berita', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }
    public function foto()
    {
        $data['title'] = 'Menu Foto - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/foto', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }
    public function video()
    {
        $data['title'] = 'Menu Video - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/video', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }
}
