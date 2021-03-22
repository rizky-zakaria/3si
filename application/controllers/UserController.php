<?php

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        // if ($this->session->userdata('login') != 'logedIn') {
        //     redirect(base_url('AuthController'));
        // }
    }

    public function index()
    {
        $data['user'] = $this->UserModel->getAllData();
        $this->load->view('templates/header');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

     public function formTambah()
    {
        $data['level'] = $this->db->get('tb_user')->result_array();
        $this->load->view('templates/header');
        $this->load->view('user/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $array = array(
            // 'id_user' => $this->input->post('user'),
            'username' => $this->input->post('Username'),
            'password' => $this->input->post('Password'),
            'level' => $this->input->post('level'),
        );
        //var_dump($array);
        $insert = $this->db->insert('tb_user', $array);
        if ($insert) {
            redirect(base_url("UserController"));
        } else {
            echo "gagal";
        }
        $insert = $this->UserModel->insertData($array);
    }

      public function hapus($id)
    {
        // $this->db->where('id_undangan' == $id);
        $hapus = $this->db->delete('tb_user', array('id_user' => $id));
        if ($hapus) {
            redirect(base_url("UserController"));
        } else {
            echo "gagal";
        }
    }
     public function edit($id)
    {
        $data['user'] = $this->db->get_where('tb_user', array('id_user' => $id))->row_array();
        //var_dump($data);
        //die;
        $this->load->view('templates/header');
        $this->load->view('user/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        $array = array(
             'username' => $this->input->post('Username'),
            'password' => $this->input->post('Password'),
            'level' => $this->input->post('level'),
        );
        $this->db->where('id_user', $id);
        $update = $this->db->update('tb_user', $array);
        if ($update) {
            redirect(base_url("UserController"));
        } else {
            echo "gagal";
        }
        //var_dump($array);
    }
}
