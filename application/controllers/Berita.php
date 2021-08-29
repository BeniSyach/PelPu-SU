<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function index()
    {
        $data['berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Berita Utama - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/berita', $data);
        $this->load->view('template/footer');
    }

    public function detail_berita($id)
    {
        $data['berita'] = $this->db->get_where('berita', [
            'id' => $id
        ])->row_array();

        $data['semua_berita'] = $this->db->get('berita')->result_array();

        $data['title'] = 'Berita Utama - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/detail_berita', $data);
        $this->load->view('template/footer');
    }
}
