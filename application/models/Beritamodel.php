<?php defined('BASEPATH') or exit('No direct script access allowed');
class Beritamodel extends CI_Model
{
    function data($number, $offset)
    {
        $this->db->join('user', 'user.id_user=berita.user_id');
        $this->db->order_by('berita.tanggal', 'desc');
        return $query = $this->db->get('berita', $number, $offset)->result();
    }

    function jumlah_data()
    {
        return $this->db->get('berita')->num_rows();
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
