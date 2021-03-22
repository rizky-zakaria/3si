<?php

class AnggotaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        if ($this->session->userdata('login') != 'logedIn') {
            redirect(base_url('AuthController'));
        }
    }

    public function index()
    {
        $data['anggota'] = $this->AnggotaModel->getAllData();
        $this->load->view('templates/header');
        $this->load->view('anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {

        $data['id_user'] = $this->db->get('tb_anggota')->result_array();
        $this->load->view('templates/header');
        $this->load->view('anggota/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $array = array(
            'nama' => $this->input->post('Nama'),
            'alamat' => $this->input->post('Alamat'),
            'nik' => $this->input->post('Nik'),
            'id_user' => $this->input->post('anggota'),
        );
        //var_dump($array);
        $insert = $this->db->insert('tb_anggota', $array);
        if ($insert) {
            redirect(base_url("AnggotaController"));
        } else {
            echo "gagal";
        }
        //$insert = $this->AgendaModel->insertData($array);
    }

    public function hapus($id)
    {
        $cek = $this->db->get_where('tb_kepala', array('id_anggota' => $id))->row_array();
        if ($cek) {
            $this->db->delete('tb_rapat',  );
            $kepala = $this->db->delete('tb_kepala', array('id_anggota' => $id));
            if ($kepala) {
                 $hapus = $this->db->delete('tb_anggota', array('id_anggota' => $id));
                 if ($hapus) {
                     redirect(base_url('AnggotaController'));
                 }else{
                    echo "gagal manghapus";
                 }
            }else{
                echo "gagal menghapus";
            }
        }$hapus = $this->db->delete('tb_anggota', array('id_anggota' => $id));
        if ($hapus) {
            redirect(base_url('AnggotaController'));
        } else {
            echo "gagal Menghapus";
        }
    }

    public function edit($id)
    {
        $data['anggota'] = $this->db->get_where('tb_anggota', array('id_anggota' => $id))->row_array();
        $data['id_user'] = $this->db->get('tb_user')->result_array();
        // $data['anggota'] = $this->db->get('tb_anggota')->result_array();
        // var_dump($data);
        // die;
        $this->load->view('templates/header');
        $this->load->view('anggota/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function updateData()
    {
        $id = $this->input->post('id');
        $array = array(
            'nama' => $this->input->post('Nama'),
            'alamat' => $this->input->post('Alamat'),
            'nik' => $this->input->post('Nik'),
            // 'id_user' => $this->input->post('anggota'),
        );
        $this->db->where('id_anggota', $id);
        $update = $this->db->update('tb_anggota', $array);
        if ($update) {
            redirect(base_url("AnggotaController"));
        } else {
            echo "gagal";
        }
        //var_dump($array);
    
    }
}
