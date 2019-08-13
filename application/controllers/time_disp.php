<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_disp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model'); 
		
	}

	public function index()
	{
		date_default_timezone_set("Asia/Bangkok");
		$tanggal = date("Y-m-d");
		$settings = $this->model->GetSetting()->result_array();
		$data = array(
			'user' => $settings[0]['id'],
			'jadwalsholat' => $this->model->GetJadwal("where tanggal = '$tanggal'")->result_array(),
			'nama_masjid' => $settings[0]['nama_masjid'],
			'alamat' => $settings[0]['alamat'],
			'runtext' => $settings[0]['runtext'],
			'image' => $settings[0]['image'],
			'information' => $this->model->GetText()->result_array(),
			
		);

		$this->load->view('/home/time_disp',$data);
	}

	//fungsi untuk reload page
	function stat($kode = 0){
		$data=$this->model->upstat("where id = '$kode'");
		echo json_encode($data);
	}

	function updatestat(){
		//$datausr = $this->model->GetUserr()->result_array();
		$data = array(
			'id' => $this->input->post('id'),
			'status' => $this->input->post('status'),
		);
		
		$data=$this->model->UpdateStatus($data);
		//echo json_encode($data);
	}
	
}
