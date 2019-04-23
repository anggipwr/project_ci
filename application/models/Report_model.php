<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model
{
    
	public function getInfoUnit ($id_unit)
	{
		$query = $this->db->query (
		"SELECT * FROM unit WHERE id_unit = $id_unit
		");
		return $query->row();
	}
	
	public function getPegawaiHb($id_unit)
	{
		// Ambil Data Pegawai Per Unit Kerja
		$query = $this->db->query("SELECT pg.nip,pg.nama,u.nama_unit,pd.nama as ijazah,
		IF(pg.jenis_kelamin='L', 'Laki-Laki', 'Perempuan') as jk, 
		 pt.nama as SPJA, 
		 format(g.nominal,0,'de_DE') as honorarium, 
		 format(b.perusahaan,0,'de_DE') as tunjanganbpjs, 
		 format(g.nominal+b.perusahaan,0,'de_DE') as ht, 
		 format((g.nominal+b.perusahaan)*0.05,0,'de_DE') as biayajabatan,
		 format(pt.ptkp_bulan,0,'de_DE') as ptkp,
		 format(IF (pt.ptkp_bulan>(g.nominal+b.perusahaan)+((g.nominal+b.perusahaan)*0.05),0,(g.nominal+b.perusahaan)+(g.nominal+b.perusahaan)*0.05),0,'de_DE') as pkpp,
		 format(IF (pt.ptkp_bulan>(g.nominal+b.perusahaan)+((g.nominal+b.perusahaan)*0.05),0,(g.nominal+b.perusahaan)+(g.nominal+b.perusahaan)*0.05)*0.05,0,'de_DE') as pph, 
		 format(b.perusahaan,0,'de_DE') as bpjspr,
		 format(b.pekerja,0,'de_DE') as bpjspk, 
		 format((g.nominal+b.perusahaan)-(b.perusahaan+b.pekerja),0,'de_DE') as jumlahbersih, 
		 pg.nik, pg.alamat, pg.npwp
		FROM pegawai pg
		INNER JOIN unit u ON pg.id_unit = u.id_unit AND u.id_unit = '$id_unit'
		LEFT JOIN pendidikan pd on pg.id_pendidikan = pd.id_pendidikan
		LEFT JOIN gaji g on pg.id_pendidikan = g.id_pendidikan AND g.tahun='2019'
		LEFT JOIN ptkp pt on pg.id_ptkp=pt.id_ptkp
		LEFT JOIN pajak pa on pa.id_ptkp=pg.id_ptkp and pa.tahun='2019'
		LEFT JOIN bpjs b on b.tahun = '2019'
		ORDER BY pd.id_pendidikan,pg.nama");
		return $query->result();
	}
	
	public function getJumlahHb($id_unit,$tahun)
	{	
		// Ambil Total Data Pegawai Per Unit Kerja
		$query = $this->db->query("SELECT format(SUM(g.nominal),0,'de_DE') as honorarium, 
		 format(SUM(b.perusahaan),0,'de_DE') as tunjanganbpjs, 
		 format(SUM((g.nominal+b.perusahaan)*0.05),0,'de_DE') as biayajabatan,
		 format(SUM(pt.ptkp_bulan),0,'de_DE') as ptkp,
		 format(SUM(IF (pt.ptkp_bulan>(g.nominal+b.perusahaan)+((g.nominal+b.perusahaan)*0.05),0,(g.nominal+b.perusahaan)+(g.nominal+b.perusahaan)*0.05)),0,'de_DE') as pkpp,
		 format(SUM(IF (pt.ptkp_bulan>(g.nominal+b.perusahaan)+((g.nominal+b.perusahaan)*0.05),0,(g.nominal+b.perusahaan)+(g.nominal+b.perusahaan)*0.05)*0.05),0,'de_DE') as pph, 
		 format(SUM(b.perusahaan+b.pekerja),0,'de_DE') as bpjs,
		 format(SUM((g.nominal+b.perusahaan)-(b.perusahaan+b.pekerja)),0,'de_DE') as jumlahbersih
		FROM pegawai pg
		INNER JOIN unit u ON pg.id_unit = u.id_unit AND u.id_unit = '$id_unit'
		LEFT JOIN pendidikan pd on pg.id_pendidikan = pd.id_pendidikan
		LEFT JOIN gaji g on pg.id_pendidikan = g.id_pendidikan AND g.tahun='2019'
		LEFT JOIN ptkp pt on pg.id_ptkp=pt.id_ptkp
		LEFT JOIN pajak pa on pa.id_ptkp=pg.id_ptkp and pa.tahun='2019'
		LEFT JOIN bpjs b on b.tahun = '2019'");
		return $query->result();
	}
}
