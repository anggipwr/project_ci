<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ptt_model extends CI_Model
{
    private $_table = "pegawai";
    public function getAll($id_unit)
    {
        $query = $this->db->query(
		"select pg.id_pegawai, pg.nip, pg.nama, pg.id_pendidikan, pd.nama as pendidikan, pg.id_unit, u.nama_unit AS unit FROM pegawai pg
		INNER JOIN unit u ON pg.id_unit = u.id_unit AND pg.id_unit = $id_unit
		LEFT JOIN pendidikan pd ON pg.id_pendidikan = pd.id_pendidikan
		ORDER BY pg.id_unit,pg.id_pendidikan, pg.nama
		");
		return $query->result();
    }
    
    public function getById($id)
    {
        $query = $this->db->query(
		"select pg.id_pegawai, pg.nip, pg.nama, pg.id_pendidikan, pd.nama as pendidikan, pg.id_unit, u.nama_unit AS unit FROM pegawai pg
		LEFT JOIN pendidikan pd ON pg.id_pendidikan = pd.id_pendidikan 
		LEFT JOIN unit u ON pg.id_unit = u.id_unit
		WHERE pg.id_pegawai = $id
		ORDER BY pg.id_unit,pg.id_pendidikan, pg.nama
		");
		return $query->result();
    }



}
