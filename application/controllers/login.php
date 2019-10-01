<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model'); 
		
	}
	function index(){
		if ($this->session->userdata('useradmin')) {
			redirect(base_url().'login');
		}
		else{
			$sub_data['info']=$this->session->userdata('info');

			$this->load->view('login/login', $sub_data);
			
			$this->session->unset_userdata('info');       
		}
	}

	/*
	function login_m(){
		if ($this->session->userdata('dashboard')) {
			redirect(base_url().'login_m');
		}
		else{
			$sub_data['info']=$this->session->userdata('info');

			$this->load->view('login/login_m', $sub_data);
			
			$this->session->unset_userdata('info');      
		}
	}
	*/

	
	public function proseslog() {
		$data = array(
			//'username' => $this->input->post('nama_user', TRUE),
			'passcode' => md5($this->input->post('pass_user', TRUE)),
			);
		
		$hasil = $this->model->GetUser($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				// $sess_data['logged_in'] = 'Sudah Loggin';
				//$sess_data['id_user'] = $sess->id_user;
				//$sess_data['username'] = $sess->username;
				//$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$sess_data['passcode'] = $sess->passcode;
				$this->session->set_userdata($sess_data);
				
			}
			if ($this->session->userdata('level')=='1') {
				$this->session->set_userdata('useradmin', $sess_data);
				redirect(base_url()."mobile");
			}
			else{
				$this->session->set_userdata('info', $sess_data);
				redirect(base_url());
			}		
			/*
			if ($this->session->userdata('level')=='1') {
				$this->session->set_userdata('useradmin', $sess_data);
				redirect(base_url()."dashboard_new");
			}
			else{
				$this->session->set_userdata('user', $sess_data);
				redirect(base_url()."user/edituser/".$sess_data['id_user']);
			}	
			*/
		}
		else {
			$info='<div style="color:red">PASTIKAN ANDA MEMASUKKAN CODE YANG BENAR!!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'login');
		}
	}

	/*
	public function proseslog_m() {
		$data = array(
			'nama_user' => $this->input->post('nama_user', TRUE),
			'pass_user' => md5($this->input->post('pass_user', TRUE)),
			);
		
		$hasil = $this->model->GetUser($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				// $sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['nama_user'] = $sess->nama_user;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$sess_data['pass_user'] = $sess->pass_user;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='1') {
				$this->session->set_userdata('useradmin', $sess_data);
				redirect(base_url()."dashboard_new");
			}
			else{
				$this->session->set_userdata('user', $sess_data);
				redirect(base_url()."frontviu/mobilev/".$sess_data['id_user']);
			}	
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI NAMA PENGGUNA DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url().'login_m');
		}
	}
	*/

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login');
	}
    // function register(){
    // 	$this->load->view('v_register');
    // }
}
