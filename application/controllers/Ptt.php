<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ptt extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('ptt_model');
        $this->load->library('form_validation');
    }
	
	public function index()
	{
		$id_unit = $this->session->userdata('id_unit');
		$data['hasilquery'] = $this->ptt_model->getAll($id_unit);
		$this->load->view('ptt', $data);
	}
	
	public function view($id = null)
	{
		$data['hasilquery'] = $this->ptt_model->getById($id);
		$this->load->view('ptt', $data);
	}
}
