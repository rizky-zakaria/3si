<?php
class AbsensiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('RapatModel');
        $this->load->model('DashboardModel');
        $this->load->model('AbsensiModel');
        if ($this->session->userdata('login') != 'logedIn') {
            redirect(base_url('AuthController'));
        }
    }

    public function index()
    {
        $data['anggota'] = $this->AbsensiModel->getAllData();
        // var_dump($data);
        // die;
        $data['get'] = $this->db->query("SELECT tb_undangan.id_undangan, tb_undangan.hal, tb_rapat.id_rapat FROM tb_rapat JOIN tb_undangan ON tb_rapat.id_undangan = tb_undangan.id_undangan")->result_array();
        $data['rapat'] = $this->RapatModel->getCount();
        $data['user'] = $this->DashboardModel->countDataUser();
          if ($this->session->userdata('role')  != 3) {
        $this->load->view('templates/header');
        $this->load->view('absensi/index', $data);
        $this->load->view('templates/footer');
         } else{
            $id = $this->session->userdata('id_user');
            $data['anggota'] = $this->db->query("SELECT * FROM tb_user JOIN tb_anggota JOIN tb_kehadiran ON tb_user.id_user = tb_anggota.id_user AND tb_anggota.id_anggota = tb_kehadiran.id_anggota WHERE tb_user.id_user = '$id' ")->result_array(); 
         $this->load->view('templates/header');
        $this->load->view('absensi/index', $data);
        $this->load->view('templates/footer');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('role');
        redirect(base_url('AuthController'));
    }

    public function insertAbsen()
    {
        $nama = $this->input->post('absen');
        $rapat = $this->input->post('rapat');
        foreach($nama as $nm){
            $this->db->insert('tb_kehadiran', array('id_rapat' => $rapat, 'id_anggota' => $nm));
        }
        redirect(base_url("AbsensiController"));
    }

    public function view()
    {
        $data['kehadiran'] = $this->db->query("SELECT * FROM tb_kehadiran JOIN tb_rapat JOIN tb_anggota ON tb_kehadiran.id_rapat = tb_rapat.id_rapat AND tb_anggota.id_anggota = tb_kehadiran.id_anggota")->result_array();
        // var_dump($data);
        // die;
        $this->load->view('templates/header');
        $this->load->view('absensi/view', $data);
        $this->load->view('templates/footer');
    }
}
