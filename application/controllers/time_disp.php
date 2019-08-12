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
		$settings = $this->model->GetSetting("where status = '1'")->result_array();
		$data = array(
			
			'jadwalsholat' => $this->model->GetJadwal("where tanggal = '$tanggal'")->result_array(),
			'nama_masjid' => $settings[0]['nama_masjid'],
			'alamat' => $settings[0]['alamat'],
			'runtext' => $settings[0]['runtext'],
			'image' => $settings[0]['image'],
			'information' => $this->model->GetText()->result_array(),
			
		);

		$this->load->view('/home/time_disp',$data);
	}
	
}
