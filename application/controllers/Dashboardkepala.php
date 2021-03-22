<?php 
class Dashboardkepala extends CI_Controller
{

	    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('RapatModel');
        if ($this->session->userdata('login') != 'logedIn') {
            redirect(base_url('AuthController'));
        }
    }

	public function index()
	{
		$data['anggota'] = $this->AnggotaModel->getCount();
		$data['rapat'] = $this->RapatModel->getcount();
		$this->load->view('templates/header');
		$this->load->view('dashboardkepala/index', $data);
		$this->load->view('templates/footer');
	}
}
