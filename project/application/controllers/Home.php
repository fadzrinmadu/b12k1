<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'home');
	}

	public function index()
	{
		$this->form_validation->set_rules($this->home->rules());

		if ($this->form_validation->run() == false) {
			$data['employee'] = $this->home->getName();
			$data['work'] = $this->home->getWork();
			$data['kategori'] = $this->home->getKategori();

			$this->load->view('home', $data);
		} else {
			$post = $this->input->post(null, true);
			$this->home->addName($post);

			$this->session->set_flashdata('flash', 'Data telah berhasil di tambahkan');
			redirect('home');
		}
	}

	public function edit()
	{
		$this->form_validation->set_rules($this->home->rules());

		if ($this->form_validation->run() == false) {
			redirect('home');
		} else {
			$post = $this->input->post(null, true);
			$this->home->editName($post);

			$this->session->set_flashdata('flash', 'Data telah berhasil di rubah');
			redirect('home');
		}
	}

	public function hapus($id = null) 
	{
		if ($id == null) {
			redirect('home');
		}
		$data = $this->home->getNameByID($id);
		$this->home->deleteName($id);

		$this->session->set_flashdata('flash', 'Data '. $data['name'] .' telah berhasil di hapus');
		redirect('home');
	}

	public function getNameByID()
	{
		$id = $this->input->post('id');
		if ($id == null) redirect('home');

		echo json_encode($this->home->getNameByID($id));
	}
}
