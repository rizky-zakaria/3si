<?php
class DashboardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('RapatModel');
        $this->load->model('DashboardModel');
        if ($this->session->userdata('login') != 'logedIn') {
            redirect(base_url('AuthController'));
        }
    }

    public function index()
    {
        $data['anggota'] = $this->AnggotaModel->getCount();
        $data['rapat'] = $this->RapatModel->getCount();
        $data['user'] = $this->DashboardModel->countDataUser();
        $this->load->view('templates/header');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('role');
        redirect(base_url('AuthController'));
    }
}
