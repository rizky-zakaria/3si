<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        if ($this->session->userdata('login') == 'logedIn') {
            redirect(base_url('DashboardController'));
        }
    }

    public function index()
    {
        $this->load->view("auth/index");
    }

    public function cekUser()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->AuthModel->cekUser($username, $password)->row_array();
        if ($result) {
            $session = array(
                'id_user' => $result['id_user'],
                'username' => $result['username'],
                'role' => $result['level'],
                'login' => 'logedIn'
            );
            $this->session->set_userdata($session);
            if ($result['level'] == 1) {
                redirect(base_url("KepalaController"));
            } elseif ($result['level'] == 2) {
                redirect(base_url("NotulisController"));
            }
            // else {
            //    redirect(base_url("DashboardController"));  
            // }
        } else {
            redirect(base_url("AuthController"));
        }
    }
}
