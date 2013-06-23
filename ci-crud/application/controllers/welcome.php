<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/*
	Contoh CRUD Aplikasi Buku Tamu
	Oleh Ahmad Rizal Afani
	http://calonpresident.blogspot.com
	*/
	public function index($mess = 0)
	{
		$data = array(
			'content' => $this->my_model->GetData(),
			'message' => $mess
		);
		$this->load->view('index',$data);
	}
	
	public function add()
	{
		$data = array(
			'status' => 'Tambah',
			'nama' => '',
			'email' => '',
			'alamat' => '',
			'id' => ''
		);
		$this->load->view('manipulasi_data',$data);
	}
	
	public function edit($id = 0)
	{
		$temp = $this->my_model->GetData("where id = '$id'")->result_array();
		$data = array(
			'status' => 'Edit',
			'nama' => $temp[0]['nama'],
			'email' => $temp[0]['email'],
			'alamat' => $temp[0]['alamat'],
			'id' => $temp[0]['id']
		);
		$this->load->view('manipulasi_data',$data);
	}
	
	public function delete($id = 0)
	{
		$result = $this->my_model->DeleteData('guestbook',array('id' => $id));
		if($result == 1){
			header("location:".base_url().'index.php/welcome/index/3');
		}else{
			echo "<h2>Operasi Hapus Data Gagal !!!</h2><br><a href='".base_url()."'>Kembali ke Halaman sebelumnya</a>";
		}
	}
	
	public function simpan()
	{
		if($_POST){
			$kode = $_POST['kode'];
			$nama = $_POST['nama'];			
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
			$status = $_POST['status'];
			
			$data = array(
				'nama' => $nama,
				'email' => $email,
				'alamat' => $alamat
			);
			if(strtolower($status) == "tambah"){
				$result = $this->my_model->InsertData('guestbook',$data);
				if($result == 1){
					header("location:".base_url().'index.php/welcome/index/1');
				}else{
					echo "<h2>Operasi Tambah Data Gagal !!!</h2><br><a href='".base_url()."'>Kembali ke Halaman sebelumnya</a>";
				}
			}else{
				$result = $this->my_model->UpdateData('guestbook',$data,array('id' => $kode));
				if($result == 1){
					header("location:".base_url().'index.php/welcome/index/2');
				}else{
					echo "<h2>Operasi Ubah Data Gagal !!!</h2><br><a href='".base_url()."'>Kembali ke Halaman sebelumnya</a>";
				}
			}
		}else{
			header('location:'.base_url());
		}
	}
}
