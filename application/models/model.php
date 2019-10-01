<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function GetJadwal($where= "")
	{
		$data = $this->db->query('select * from tb_jadwalsholat '.$where);
		return $data;
	}

	public function GetHadits($where= "")
	{
		$data = $this->db->query('select * from tb_hadits '.$where);
		return $data;
	}

	public function GetSetting($where= "")
	{
		$data = $this->db->query('select * from tb_setting '.$where);
		return $data;
	}

	public function GetText($where= "")
	{
		$data = $this->db->query('select * from tb_runtext '.$where);
		return $data;
	}

	function UpdateSetting($data){
        $this->db->where('id',$data['id']);
        $this->db->update('tb_setting',$data);
	}
	
	public function GetImg($where= "")
	{
		$data = $this->db->query('select * from tb_setting '.$where);
		return $data;
	}

	function EditText($data){
        $this->db->where('id',$data['id']);
        $this->db->update('tb_runtext',$data);
	}

	public function Hapus($table,$where){
		
		return $this->db->delete($table,$where);
	}

	public function AddTeks($data)
	{
		$this->db->insert('tb_runtext', $data);
	}

	public function CountText()
	{
		$data = $this->db->query('select * from tb_runtext ');
		return $data;
	}

	function upstat($where = ""){
		$hasil=$this->db->query("SELECT * FROM tb_setting ".$where);
		return $hasil->result();
	}

	function UpdateStatus($data){
        $this->db->where('id',$data['id']);
        $this->db->update('tb_setting',$data);
    }

	function GetGbr($where= "")
	{
		$data = $this->db->query('select * from tb_img '.$where);
		return $data;
	}

	function GetVid($where= "") {
        $data = $this->db->query('select * from tb_vids '.$where);
		return $data;
	}
	
	function UpdateUrut($data){
        $this->db->where('id_img',$data['id_img']);
        $this->db->update('tb_img',$data);
	}

	function UpdateDurasi($data){
        $this->db->where('id_user',$data['id_user']);
        $this->db->update('tb_img',$data);
	}


	function SimpanImg($data){
        $this->db->where('id_user',$data['id_user']);
        $this->db->insert('tb_img',$data);
	}

	function SimpanVid($data){
        $this->db->where('id_user',$data['id_user']);
        $this->db->insert('tb_vids',$data);
	}

	function UpdateUrutV($data){
        $this->db->where('id_vids',$data['id_vids']);
        $this->db->update('tb_vids',$data);
    }

	function SimpanJadwal($data){
       // $this->db->where('id_user',$data['id_user']);
        $this->db->insert('tb_jadwalsholat',$data);
	}

	//ambil data user
	function GetUser($data) {
        $query = $this->db->get_where('tb_setting', $data);
        return $query;
    }
	
}

/* End of file model.php */
/* Location: ./application/models/model.php */