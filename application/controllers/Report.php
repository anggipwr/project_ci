<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("report_model");
		$this->load->helper('tgl_indo');		
    }
	
	public function index()
	{
		$this->load->view('report/report');
	}
	
	public function cetak()
	{
		$tanggal=htmlspecialchars($this->input->post('tanggal',TRUE),ENT_QUOTES);
        $jenis=htmlspecialchars($this->input->post('jenis',TRUE),ENT_QUOTES);
		$id_unit=$this->session->userdata('id_unit');
		$tglbulan = bulantahun_indo($tanggal);
		
		 switch ($jenis)
            {
                case 1:
                    $data['hasilquery'] = $this->report_model->getPegawaiHb($id_unit);
					$data['tglbulan'] = $tglbulan;
					$data['infounit'] = $this->report_model->getInfoUnit($id_unit);
					$this->load->library('pdf');
					$this->pdf->setPaper(array(0, 0, 612.00, 936.00),'landscape');
					$this->pdf->filename = "SPJ HONORARIUM BULAN ".$tglbulan.".pdf";
					$this->pdf->load_view('report/laporan_pdf', $data);
                    break;
                case 2:
                    return "FEBRUARI";
                    break;
                case 3:
                    return "MARET";
                    break;
			}
		
		
	}
	
}
