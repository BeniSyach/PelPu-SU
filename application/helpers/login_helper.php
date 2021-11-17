<?php

function cek_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $user = $ci->session->userdata('email');

        $userAccess = $ci->db->get_where('user', [
            'email' => $user
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}
