<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Visi Dan Misi - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'profil';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/profil/profile', $data);
        $this->load->view('template/footer');
    }

    public function Sejarah()
    {
        $data['title'] = 'Sejarah - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'profil';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/profil/sejarah', $data);
        $this->load->view('template/footer');
    }

    public function tugaspokok()
    {
        $data['title'] = 'Tugas Pokok Fungsi Dan Wewenang - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'profil';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/profil/tugas-pokok', $data);
        $this->load->view('template/footer');
    }

    public function struktur()
    {
        $data['title'] = 'Struktur Organisasi - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'profil';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/profil/struktur-organisasi', $data);
        $this->load->view('template/footer');
    }

    public function kepalabnnp()
    {
        $data['title'] = 'Kepala BNN Dari Masa Ke Masa - Pelayanan Publik Sumatera Utara';
        $data['active'] = 'profil';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('menu/profil/kepala-bnnp', $data);
        $this->load->view('template/footer');
    }
}
