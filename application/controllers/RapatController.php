<?php
class RapatController extends CI_Controller
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
        $data['rapat'] = $this->db->query("SELECT * FROM tb_rapat JOIN tb_undangan ON tb_rapat.id_undangan = tb_undangan.id_undangan")->result_array();
        $data['role'] = $this->session->userdata('role');
        $this->load->view('templates/header');
        $this->load->view('rapat/index', $data);
        $this->load->view('templates/footer');
    }

    public function CekVerifikasi()
    {
        $data['anggota'] = $this->AnggotaModel->getCount();
        $data['rapat'] = $this->RapatModel->getCount();
        $data['user'] = $this->DashboardModel->countDataUser();
        $data['rapat'] = $this->db->query("SELECT * FROM tb_rapat JOIN tb_undangan ON tb_rapat.id_undangan = tb_undangan.id_undangan")->result_array();

        $this->load->view('templates/header');
        $this->load->view('rapat/terverfikasi', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['id_undangan'] = $this->db->get('tb_undangan')->result_array();
        $data['hal'] = $this->db->get('tb_rapat')->result_array();
        $data['hasil_rapat'] = $this->db->get('tb_rapat')->result_array();
        $this->load->view('templates/header');
        $this->load->view('rapat/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $id_undang = $this->input->post('id_undangan');
        $und = $this->db->get_where('tb_undangan', $id_undang)->row_array();
        $array = array(
            'id_undangan' => $this->input->post('id_undangan'),
            'id_kepala' => 1,
            'hal' => $und['hal'],
            'hasil_rapat' => $this->input->post('hasil_rapat'),
            'tgl' => date('Y-m-d')
        );
        //var_dump($array);
        $insert = $this->db->insert('tb_rapat', $array);
        // $insert = $this->db->insert('tb_undangan', $array);
        if ($insert) {
            redirect(base_url("RapatController"));
        } else {
            echo "gagal";
        }
        // $insert = $this->RapatModel->insertData($array);
    }

    public function hapus($id)
    {
        // $this->db->where('id_undangan' == $id);
        $hapus = $this->db->delete('tb_rapat', array('id_rapat' => $id));
        if ($hapus) {
            redirect(base_url("RapatController"));
        } else {
            echo "gagal";
        }
    }

    public function edit($id)
    {
        // $data['rapat'] = $this->db->query("SELECT * FROM tb_rapat JOIN tb_undangan ON tb_rapat.id_undangan = tb_undangan.id_undangan")->result_array();

        $data['rapat'] = $this->db->get_where('tb_rapat', array('id_rapat' => $id))->row_array();
        $data['undangan'] = $this->db->query("SELECT * FROM tb_undangan")->result_array();
        // $data['rapat'] = $this->db->get_where('tb_undangan', array('id_undangan' =>$id))->row_array();
        // var_dump($data);
        // die;
        $this->load->view('templates/header');
        $this->load->view('rapat/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        $array = array(
            'id_undangan' => $this->input->post('id_undangan'),
            'id_kepala' => 1,
            'hasil_rapat' => $this->input->post('Hasil_rapat'),
        );
        $this->db->where('id_rapat', $id);
        $update = $this->db->update('tb_rapat', $array);
        if ($update) {
            redirect(base_url("RapatController"));
        } else {
            echo "gagal";
        }
        //var_dump($array);

    }

    public function verifikasi($id)
    {

        $array = array(
            'id_rapat' =>  $id,
            'status' => "Terverifikasi"
        );
        $this->db->insert('tb_verifikasi', $array);
        redirect(base_url("RapatController"));
    }
}
