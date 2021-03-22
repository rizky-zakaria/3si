<?php

class AgendaModel extends CI_Model
{
    public function getCount()
    {
        return $this->db->query('SELECT COUNT("id_undangan") AS id FROM tb_undangan')->row_array();
    }

    public function getAllData()
    {
        return $this->db->get('tb_undangan')->result_array();
    }
}
