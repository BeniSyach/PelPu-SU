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
        $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Menu Berita - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/berita', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_berita()
    {
    }

    public function Ubah_berita($id)
    {
    }

    public function hapus_berita($id)
    {
    }

    public function foto()
    {
        $data['foto'] = $this->db->get('foto')->result_array();

        $data['title'] = 'Menu Foto - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/foto', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_foto()
    {
    }

    public function ubah_foto($id)
    {
    }

    public function hapus_foto($id)
    {
    }

    public function video()
    {
        $data['video'] = $this->db->get('video')->result_array();

        $data['title'] = 'Menu Video - Pelayanan Publik Sumatera Utara';
        $this->load->view('admin/template_admin/header_admin', $data);
        $this->load->view('admin/menu_admin/video', $data);
        $this->load->view('admin/template_admin/footer_admin');
    }

    public function tambah_video()
    {
    }

    public function ubah_video($id)
    {
    }

    public function hapus_video($id)
    {
    }
}
