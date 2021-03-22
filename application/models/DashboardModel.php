<?php
class DashboardModel extends CI_Model
{
	public function countDataUser()
	{
		return $this->db->query("SELECT COUNT('id_user') as id FROM tb_user")->row_array();
	}
}