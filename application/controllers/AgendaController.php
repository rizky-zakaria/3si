<?php
class AgendaController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('AgendaModel');
		if ($this->session->userdata('login') != 'logedIn') {
			redirect(base_url('AuthController'));
		}
	}

	public function index()
	{
		$data['agenda'] = $this->db->get('tb_undangan')->result_array();
		$data['id'] = $this->session->userdata('role');
		$this->load->view('templates/header');
		$this->load->view('agenda/index', $data);
		$this->load->view('templates/footer');
	}

	public function formTambah()
	{
		$data['agenda'] = $this->AgendaModel->getAllData();
		$data['agenda'] = $this->db->get('tb_undangan')->result_array();
		$data['id'] = $this->session->userdata('role');
		$this->load->view('templates/header');
		$this->load->view('agenda/formTambah', $data);
		$this->load->view('templates/footer');
	}

	public function insertData()
	{
		$array = array(
			'hal' => $this->input->post('Hal'),
			'tgl' => $this->input->post('Tanggal'),
			'waktu' => $this->input->post('Waktu'),
			'tempat' => $this->input->post('Tempat'),
		);
		//var_dump($array);
		$insert = $this->db->insert('tb_undangan', $array);
		if ($insert) {
			redirect(base_url("AgendaController"));
		} else {
			echo "gagal";
		}
		//$insert = $this->AgendaModel->insertData($array);
	}

	public function hapus($id)
	{
		// $this->db->where('id_undangan' == $id);
		$hapus = $this->db->delete('tb_undangan', array('id_undangan' => $id));
		if ($hapus) {
			redirect(base_url("AgendaController"));
		} else {
			echo "gagal";
		}
	}
	public function edit($id)
	{
		$data['agenda'] = $this->db->get_where('tb_undangan', array('id_undangan' => $id))->row_array();
		//var_dump($data);
		//die;
		$this->load->view('templates/header');
		$this->load->view('agenda/formedit', $data);
		$this->load->view('templates/footer');
	}

	public function updateData()
	{
		$id = $this->input->post('id');
		$array = array(
			'hal' => $this->input->post('Hal'),
			'tgl' => $this->input->post('Tanggal'),
			'waktu' => $this->input->post('Waktu'),
			'tempat' => $this->input->post('Tempat'),
		);
		$this->db->where('id_undangan', $id);
		$update = $this->db->update('tb_undangan', $array);
		if ($update) {
			redirect(base_url("AgendaController"));
		} else {
			echo "gagal";
		}
		//var_dump($array);

	}
}
