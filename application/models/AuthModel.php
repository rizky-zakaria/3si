<?php
class AuthModel extends CI_Model
{
    public function cekUser($username, $password)
    {
        return $this->db->get_where('tb_user', array('username' => $username, 'password' => md5($password)));
    }
}
