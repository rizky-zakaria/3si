<?php
class KepalaController extends CI_Controller
{
	
 public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('AgendaModel');
        $this->load->model('RapatModel');
        $this->load->model('DashboardModel');
        if ($this->session->userdata('login') != 'logedIn') {
            redirect(base_url('AuthController'));
        }
    }
	public function index()
	{
		 $data['anggota'] = $this->AnggotaModel->getCount();
         $data['agenda'] = $this->AgendaModel->getCount();
        $data['rapat'] = $this->RapatModel->getCount();
        $data['user'] = $this->DashboardModel->countDataUser();
		$this->load->view('templates/header');
		$this->load->view('kepala/index', $data);
		$this->load->view('templates/footer');
	}

    public function rapat()
    {
        $this->load->view('templates/header');
        $this->load->view('rapat/index');
        $this->load->view('templates/footer');
    }

}

