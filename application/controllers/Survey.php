<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Survey Ketahanan Diri - Pelayanan Publik Sumatera Utara';
        $this->load->view('template/header', $data);
        $this->load->view('menu/survey', $data);
        $this->load->view('template/footer');
    }
}
