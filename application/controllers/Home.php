<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
		
    }
	
	public function index()
	{
		$data["pegawai"] = $this->home_model->getAll();
		$this->load->view('home', $data);
	}
}
