<?php

class UserModel extends CI_Model
{
    public function getCount()
    {
        return $this->db->query('SELECT COUNT("id_user") AS id FROM tb_user')->row_array();
    }

    public function getAllData()
    {
        return $this->db->query("SELECT * FROM `tb_user` WHERE level = 1 OR level = 2")->result_array();
    }
}
