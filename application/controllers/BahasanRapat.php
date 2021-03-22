<?php
class BahasanRapat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['bahasan'] = $this->db->query("SELECT * FROM tb_bahasan JOIN tb_undangan ON tb_bahasan.id_undangan = tb_undangan.id_undangan")->result_array();
        $data['role'] = $this->session->userdata('role');
        $this->load->view('templates/header');
        $this->load->view('bahasan/index', $data);
        $this->load->view('templates/footer');
    }

    public function formTambah()
    {
        $data['undangan'] = $this->db->get('tb_undangan')->result_array();
        $this->load->view('templates/header');
        $this->load->view('bahasan/formTambah', $data);
        $this->load->view('templates/footer');
    }

    public function insertData()
    {
        $post = $this->input->post();
        $array = array(
            'bahasan' => $post['bahasan'],
            'id_undangan' => $post['undangan']
        );
        $this->db->insert('tb_bahasan', $array);
        redirect(base_url("BahasanRapat"));
    }

    public function hapus($id)
    {
        $this->db->delete('tb_bahasan', array('id' => $id));
        redirect(base_url("BahasanController"));
    }

    public function edit($id)
    {
        $data['undangan'] = $this->db->get('tb_undangan')->result_array();
        $data['bahasan'] = $this->db->get('tb_bahasan')->row_array();
        $this->load->view('templates/header');
        $this->load->view('bahasan/formEdit', $data);
        $this->load->view('templates/footer');
    }

    public function editData()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $array = array(
            'bahasan' => $post['bahasan'],
            'id_undangan' => $post['undangan']
        );
        $this->db->where('id', $id);
        $this->db->update('tb_bahasan', $array);
        redirect(base_url("BahasanRapat"));
    }
}
