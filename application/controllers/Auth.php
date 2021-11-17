<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('Form', 'Cookie', 'String'));
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Pelayanan Publik Sumatera Utara';
            $data['active'] = 'menu';
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar', $data);
            $this->load->view('menu/menu_utama', $data);
            $this->load->view('template/footer');
        } else {
            $email = htmlspecialchars($this->input->post('email', true));
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', [
                'email' => $email
            ])->row_array();

            if ($user) {
                //    user ada

                // if ($user['is_actived'] == 1) {
                // cek password
                if ($password == $user['password']) {
                    $data = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['level'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('menu');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password Anda Salah !!!
              </div>');
                    redirect('Auth');
                }
                //     } else {
                //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                //     Email anda Belum diaktivasi !!!
                //   </div>');
                //         redirect('auth');
                //     }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email anda Belum Terdaftar !!!
              </div>');
                redirect('Auth');
            }
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda Sudah Logout !!!
      </div>');
        redirect('Auth');
    }

    public function blocked()
    {
        $this->load->view('index');
    }

    public function lupa_password()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Lupa Password';
            $this->load->view('template/header', $data);
            $this->load->view('auth/lupa_password');
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_actived' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                // $this->_sendemail($token, 'lupa_password');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
              Link Reset Password Sudah dikirim Ke email, Tolong Cek Email Anda Untuk ubah Password !!!
              </div>');
                redirect('Auth/lupa_password');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Email Anda Belum Terdaftar atau Aktivasi !!!
      </div>');
                redirect('Auth/lupa_password');
            }
        }
    }

    public function lupa()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ganti_password();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Reset Password Gagal !!! Token Anda Salah
      </div>');
                redirect('Auth/lupa_password');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Reset Password Gagal !!! Email Anda Salah
      </div>');
            redirect('Auth/lupa_password');
        }
    }

    public function ganti_password()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password Tidak Sama!',
            'min_length' => 'Password terlalu Pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Ganti Password';
            $this->load->view('template/header', $data);
            $this->load->view('auth/ganti_password');
            $this->load->view('template/footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->db->delete('user_token', ['email' => $email]);

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Ubah Password Anda Berhasil !!! 
      </div>');
            redirect('Auth');
        }
    }
}
