<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
	
	function index()
	{
		
		$this->load->view('login');
	}
	
function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_unit=$this->login_model->auth_unit($username,$password);
 
        if($cek_unit->num_rows() > 0){ //jika login sebagai dosen
                $data=$cek_unit->row_array();
                $this->session->set_userdata('authenticated',TRUE);
				/*
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('page');
 
                 }else{ //akses dosen
				 */
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('id_unit',$data['id_unit']);
                    $this->session->set_userdata('nama_unit',$data['nama_unit']);
					$this->session->set_userdata('nama_lengkap',$data['nama_lengkap']);
					$this->session->set_userdata('nip_ptt','');
                    $this->session->set_userdata('nama_ptt','');
					$url=base_url();
                    redirect($url);
                 /*
				 }
				 */
 
        }else{ //jika login sebagai mahasiswa
                    $cek_ptt=$this->login_model->auth_ptt($username,$password);
                    if($cek_ptt->num_rows() > 0){
                            $data=$cek_ptt->row_array();
							$this->session->set_userdata('authenticated',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('id_unit',$data['id_unit']);
							$this->session->set_userdata('nama_unit','');
							$this->session->set_userdata('nip_ptt',$data['nip']);
                            $this->session->set_userdata('nama_ptt',$data['nama']);
                            $url=base_url();
							redirect($url);
        }else{  // jika username dan password tidak ditemukan atau salah
                            echo $this->session->set_flashdata('msg','Username atau Password Salah');
                            redirect('login'); // Redirect ke halaman login
			}
        }
 
    }
	
	 function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
	
}
