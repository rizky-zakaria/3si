<?php

class RapatModel extends CI_Model
{
    public function getCount()
    {
        return $this->db->query('SELECT COUNT("id_rapat") AS id FROM tb_rapat')->row_array();
    }

    public function getAllRapat()
    {
        return $this->db->get('tb_rapat')->result_array();
    }
}
