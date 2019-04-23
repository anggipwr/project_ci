<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	//cek unit/skpd
    function auth_unit($username,$password){
        $query=$this->db->query("SELECT * FROM unit WHERE user='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password ptt
    function auth_ptt($username,$password){
        $query=$this->db->query("SELECT * FROM pegawai WHERE nip='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
	
	public function getAllUnit()
    {
         $hasil=$this->db->query("SELECT * FROM unit");
        return $hasil;
    }



}
