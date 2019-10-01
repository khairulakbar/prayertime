<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model'); 
		$this->_cek_login();
	}

	private function _cek_login()
	{
		if(!$this->session->userdata('useradmin') && !$this->session->userdata('user')){            
			redirect(base_url().'login');
		}
		
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

			
			'listimage' => $this->model->GetGbr("where id_user = '1' order by urut asc")->result_array(),
			'listvid' => $this->model->GetVid("where id_user = '1' order by urut asc")->result_array(),
			
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

	function editimg($kode=0){
		$id_user = $_POST['id_user'];
		$data_img = $this->model->GetGbr("where id_img = '$kode'")->result_array();
		
		$urut = $_POST['img_urut'];
		//$detik = $_POST['detik'];

		$data = array(
			'id_img' => $data_img[0]['id_img'],
			'urut' => $urut,
			//'detik' => $detik,
			);
			$result = $data=$this->model->UpdateUrut($data);
			//echo json_encode($data);
			if($result != 1){
				$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil di Update</strong></div>");
				header('location:'.base_url().'mobile/');
			}else{
				$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Gagal di Update</strong></div>");
				header('location:'.base_url().'mobile/');
			}	
	}

	function hapusimg($kode = 1){
		$this->db->where('id_img',$kode);
		$query = $this->db->get('tb_img');
		$row = $query->row();
		unlink("./image_file/$row->img");
		
		$datausr = $this->model->GetGbr("where id_img = '$kode'")->result_array();
		$id_user = $datausr[0]['id_user'];

		$result = $this->model->Hapus('tb_img', array('id_img' => $kode));
		
		if($result == 1){
			
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'mobile/');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'mobile/');
		}
	}

	function saveimg(){
		//$datausr = $this->model->GetUserr("where id_user = '$kode'")->result_array();
		//$id_user = $datausr[0]['id_user'];
		$id_user = "1";

		$dtk = $this->model->GetGbr("where id_user = '$id_user'")->result_array();
		$slug = url_title($this->input->post('judul_img'), 'dash', TRUE);
		$config = array(
			'upload_path' => './image_file',
			'allowed_types' => 'gif|jpg|JPG|png',
			'max_size' => '2048',
			'file_name' => 'Image_'.$slug,
		);
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload('img');
		$upload_data = $this->upload->data();
		
		//$id_user = '';
		//$id_user_update = '';
		$urut = $_POST['urut_img'];
		$date = date('Y-m-d');
		
		//$status = $_POST['status'];
		$file_name = $upload_data['file_name'];

		$data = array(	
			'id_img' => '',
			'img' => $file_name,
			'urut' => $urut,
			'id_user'=> $id_user,
			'tgl' => $date,
			'detik' => $dtk[0]['detik'],
			);
		
		$result = $this->model->SimpanImg($data);


		if($result != 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Gambar Berhasil Disimpan</strong></div>");
			//echo '<script type="text/javascript">alert("SUKSES")</script>';
			header('location:'.base_url().'mobile/');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gambar GAGAL Disimpan</strong></div>");
			//echo '<script type="text/javascript">alert("GAGAL")</script>';
			header('location:'.base_url().'mobile/');
		}		
	}

	function updatedurasi($kode = 0){
		//$id_user = $_POST['id_user'];
		$data_img = $this->model->GetGbr("where id_img = '$kode'")->result_array();
		$id_user = $kode;
		//$urut = $_POST['img_urut'];
		$durasi = $_POST['durasi'];

		$data = array(
			//'id_img' => $data_img[0]['id_img'],
			'id_user' => $id_user,
			'detik' => $durasi,
			);
			$result = $data=$this->model->UpdateDurasi($data);
			//echo json_encode($data);
			if($result != 1){
				$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil di Update</strong></div>");
				header('location:'.base_url().'mobile');
			}else{
				$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Gagal di Update</strong></div>");
				header('location:'.base_url().'mobile');
			}	
	}

	function savevid(){
		//$datausr = $this->model->GetUserr("where id_user = '$kode'")->result_array();
		//$id_user = $datausr[0]['id_user'];
		$id_user = "1";
		//$id_user = $_POST['id_user'];
		$slug = url_title($this->input->post('judul_vid'), 'dash', TRUE);
		$config = array(
			'upload_path' => './video_file',
			'allowed_types' => 'mp4|jpg|png|',
			'max_size' => '100000', //100Mb
			'file_name' => 'Vid_'.$slug,
		);
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload('vids');
		$upload_data = $this->upload->data();
		
		//$id_user = '';
		//$id_user_update = '';
		$urut = $_POST['urut_vid'];
		$date = date('Y-m-d');
		
		//$status = $_POST['status'];
		$file_name = $upload_data['file_name'];

		$data = array(	
			'id_vids' => '',
			'vids' => $file_name,
			'urut' => $urut,
			'id_user'=> $id_user,
			'tgl' => $date,
			
			);
		
		$result = $this->model->SimpanVid($data);


		if($result != 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Gambar Berhasil Disimpan</strong></div>");
			echo '<script type="text/javascript">alert("SUKSES")</script>';
			header('location:'.base_url().'mobile');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gambar GAGAL Disimpan</strong></div>");
			echo '<script type="text/javascript">alert("GAGAL")</script>';
			header('location:'.base_url().'mobile');
		}		
	}

	function hapusvid($kode = 1){
		$this->db->where('id_vids',$kode);
		$query = $this->db->get('tb_vids');
		$row = $query->row();
		unlink("./video_file/$row->vids");
		
		//$datausr = $this->model->GetVid("where id_vids = '$kode'")->result_array();
		//$id_user = $datausr[0]['id_user'];

		$result = $this->model->Hapus('tb_vids', array('id_vids' => $kode));
		
		if($result == 1){
			
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'mobile');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'mobile');
		}
	}

	function editvid($kode = 0){
		//$id_user = $_POST['id_user'];
		$data_img = $this->model->GetVid("where id_vids = '$kode'")->result_array();
		
		$urut = $_POST['vids_urut'];

		$data = array(
			'id_vids' => $data_img[0]['id_vids'],
			'urut' => $urut,
			
			);
			$result = $data=$this->model->UpdateUrutV($data);
			//echo json_encode($data);
			if($result != 1){
				$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Data Berhasil di Update</strong></div>");
				header('location:'.base_url().'mobile');
			}else{
				$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Data Gagal di Update</strong></div>");
				header('location:'.base_url().'mobile');
			}	
	}


	function process()
	{
		//if ( isset($_POST['import'])) {

            $file = $_FILES['jadwal']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport.
			$ekstensi  = explode('.', $_FILES['jadwal']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo 'File tidak boleh kosong!';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.
				if (strtolower(end($ekstensi)) === 'csv' && $_FILES["jadwal"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r");
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						if ($i == 1) continue;
						
							// Data yang akan disimpan ke dalam databse
							$data = [
								
								'tanggal' => $row[1],
								'imsak' => $row[2],
								'subuh' => $row[3],
								'dzuhur' => $row[4],
								'ashar' => $row[5],
								'maghrib' => $row[6],
								'isya' => $row[7],
							];

							// Simpan data ke database.
							$result = $this->model->SimpanJadwal($data);

					}

					fclose($handle);
					


					if($result == 1){
						//$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Gambar Berhasil Disimpan</strong></div>");
						echo '<script type="text/javascript">alert("SUKSES")</script>';
						header('location:'.base_url().'mobile');
					}else{
						//$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Gambar GAGAL Disimpan</strong></div>");
						echo '<script type="text/javascript">alert("GAGAL")</script>';
						header('location:'.base_url().'mobile');
					}		

				} else {
					echo 'Format file tidak valid!';
				}
			}
		//}
	}

}
