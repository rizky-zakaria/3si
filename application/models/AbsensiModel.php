<?php

class AbsensiModel extends CI_Model
{
    public function getCount()
    {
        return $this->db->query('SELECT COUNT("id_anggota") AS id FROM tb_anggota')->row_array();
    }

    public function getAllData()
    {
        return $this->db->get('tb_anggota')->result_array();
    }
}
