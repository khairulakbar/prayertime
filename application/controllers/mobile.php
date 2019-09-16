<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

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
			
			'jadwalsholat' => $this->model->GetJadwal("where tanggal = '$tanggal'")->result_array(),
			'nama_masjid' => $settings[0]['nama_masjid'],
			'alamat' => $settings[0]['alamat'],
			'runtext' => $settings[0]['runtext'],
			'image' => $settings[0]['image'],
			'durasi_iqamah' => $settings[0]['durasi'],
			'template' => $settings[0]['template'],
            'id' => $settings[0]['id'],
			'information' => $this->model->GetText()->result_array(),
			
		);

		$this->load->view('/home/mview',$data);
    }
    
    function updatesetting($kode=0){
        $id = $kode;
        $nama_masjid = $_POST['nama_masjid'];
        $alamat = $_POST['alamat'];
        $runtext = $_POST['runtext'];
		$durasi = $_POST['durasi'];
        $template = $_POST['template'];
        

        $data = array(	
            'id' => $id,
			'nama_masjid'=> $nama_masjid,
			'alamat' => $alamat,
			'runtext' => $runtext,
			'durasi' => $durasi,
			'template' => $template,
            );

        $result = $this->model->UpdateSetting($data);
        if($result != 1){
            
            echo "Sukses";
            header('location:'.base_url().'mobile/');
        }else{
            echo "Gagal";
            header('location:'.base_url().'mobile');
        }	
    }
	
	function updateimage($kode=0){
		$id = $kode;
		//$image = $_POST['image'];
        $dtimg = $this->model->GetImg("where id = '$kode'")->result_array();
		$img = $dtimg[0]['image'];
        unlink("./assets/images/$img");

        $slug = url_title($this->input->post('image'), 'dash', TRUE);
		$config = array(
			'upload_path' => './assets/images',
			'allowed_types' => 'gif|jpg|JPG|png',
			'max_size' => '2048',
			'file_name' => 'Image_'.$slug,
		);
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload('image');
		$upload_data = $this->upload->data();

		//$status = $_POST['status'];
		$file_name = $upload_data['file_name'];

		$data = array(	
            'id' => $id,
			//'nama_masjid'=> $nama_masjid,
			//'alamat' => $alamat,
			//'runtext' => $runtext,
			'image' => $file_name,
			
            );

        $result = $this->model->UpdateSetting($data);
        if($result != 1){
            
            echo "Sukses";
            header('location:'.base_url().'mobile/');
        }else{
            echo "Gagal";
            header('location:'.base_url().'mobile');
        }

	}

	function tambahteks(){
        
        $text = $_POST['tambahteks'];
        
		$q = $this->model->CountText();
		$jumlah = $q->num_rows();

        $data = array(	
            'id' => '',
			'text' => $text,
			'urutan' => $jumlah+1,
			
            );

        $result = $this->model->AddTeks($data);
        if($result != 1){
            
            echo "Sukses";
            header('location:'.base_url().'mobile/');
        }else{
            echo "Gagal";
            header('location:'.base_url().'mobile');
        }	
	}

	function editteks($kode=0){
        $id = $kode;
        $text = $_POST['teks'];
        


        $data = array(	
            'id' => $id,
			'text' => $text,
			//'image' => $file_name,
			
            );

        $result = $this->model->EditText($data);
        if($result != 1){
            
            echo "Sukses";
            header('location:'.base_url().'mobile/');
        }else{
            echo "Gagal";
            header('location:'.base_url().'mobile');
        }	
	}
	
	function hapusteks($kode=1){
        
		$result = $this->model->Hapus('tb_runtext', array('id' => $kode));

        
        if($result == 1){
            
            echo "Sukses";
            header('location:'.base_url().'mobile/');
        }else{
            echo "Gagal";
            header('location:'.base_url().'mobile');
        }	
	}
	
	function updatestat($kode = 0){
		$datausr = $this->model->GetSetting("where id = '$kode'")->result_array();
		$id_user = $datausr[0]['id'];
		$data = array(
			'id' => $id_user,
			'status' => '1',
		);
		
		$data=$this->model->UpdateStatus($data);
		//echo json_encode($data);
		if($result != 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Halaman Front User akan di reload</strong></div>");
			header('location:'.base_url().'mobile/');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Halaman Front User gagal di reload</strong></div>");
			header('location:'.base_url().'mobile/');
		}	
	}

}
