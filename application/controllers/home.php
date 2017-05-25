<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	//bikin constructor
	function __construct() {
		parent::__construct();
		$this->load->model('Home_model');
	}
	
	public function index(){
		$data = $this->Home_model->bacaData();
		$dataTampil = array('databarang' => $data);
		$this->load->view('front/navbar', $dataTampil);
		$this->load->view('front/header', $dataTampil);
		$this->load->view('front/session', $dataTampil);
		$this->load->view('front/work', $dataTampil);
		$this->load->view('front/spacer', $dataTampil);
		$this->load->view('front/footer', $dataTampil);
	}
	public function dataa(){
		if($this->session->userdata('Admin')) {
			$data = $this->Home_model->bacaData();
			$dataTampil = array('databarang' => $data);
			$this->load->view('admin/tabel', $dataTampil);
			$this->load->view('admin/navbar', $dataTampil);
			$this->load->view('admin/footer', $dataTampil);
		} else {
			$this->index();
		}
	}
	public function coba() {
		if($this->session->userdata('Admin')) {
		$data = $this->Home_model->bacaData();
		$dataTampil = array('databarang' => $data);
		$this->load->view('admin/dashboard', $dataTampil);
		$this->load->view('admin/navbar', $dataTampil);
		$this->load->view('admin/footer', $dataTampil);
		} else {
			$this->index();
		}
	}
	public function apa(){
		$this->load->view('update');
	}
	public function ini()
	{
		if($this->session->userdata('Admin')){
			$this->load->view('tampilan-form');
		}
		else {
			$this->index();
		}
	}
	//fungsi tambah data
	public function addData() {
		$profit = 25000 ;
		$nomor_kain = $_POST['nomor_kain'];
		$jenis_kain = $_POST['jenis_kain'];
		$panjang_kain = $_POST['panjang_kain'];
		$harga_kain = $_POST['harga_kain'];
		$jenis_barang = $_POST['jenis_barang'];
		$detail_barang = $_POST['detail_barang'];
		$hasil_jumlah_barang = $_POST['hasil_jumlah_barang'];
		$harga_tiap_barang = $panjang_kain*$harga_kain/$hasil_jumlah_barang+$profit ;

		$type			= explode('.', $_FILES["image"]["name"]);
		$type			= $type[count($type)-1];
		$newName		= uniqid(rand()).'.'.$type;
		$config['upload_path'] 	= './image/';
		$config['allowed_types'] = 'jpg|jpeg|gif|png';
		$config['file_name'] 	= $newName;
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$foto = array('upload_data'=>$this->upload->data());

		$data = array(
			
		'nomor_kain' => $nomor_kain,
			'jenis_kain' => $jenis_kain,
			'panjang_kain' => $panjang_kain,
			'harga_kain' => $harga_kain,
			'jenis_barang' => $jenis_barang,
			'detail_barang' => $detail_barang,
			'hasil_jumlah_barang' =>$hasil_jumlah_barang,
			'harga_tiap_barang' => $harga_tiap_barang,
			'path' => '/image/'.$newName
		);

		$this->Home_model->tambahData($data);
		$this->coba();
	}
	//fungsi tampil data
	public function readData(){
		$this->load->view('login-form');
	}
	//login
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password'); // get data
		$isLogin = $this->Home_model->login_authen($username,$password);

		if($isLogin == true){
			$this->session->set_userdata('Admin',TRUE);
			$this->coba();
		}
		else{
				$data['err_message'] = "Password salah";
				$this->load->view('login-form', $data);
		}

	}
	//fungsi update data
	public function edit_data($nomor_kain){

		$barang = $this->Home_model->baca($nomor_kain);
		$databarang = array (
			'nomor_kain' => $barang[0]['nomor_kain'],
			'jenis_kain' => $barang[0]['jenis_kain'],
			'panjang_kain' => $barang[0]['panjang_kain'],
			'harga_kain' => $barang[0]['harga_kain'],
			'jenis_barang' => $barang[0]['jenis_barang'],
			'detail_barang' => $barang[0]['detail_barang'],
			'hasil_jumlah_barang' => $barang[0]['hasil_jumlah_barang'],
			);
		$this->load->view('update', $databarang);
	}


	public function updateData(){
		$profit = 25000 ;
		$nomor_kain = $_POST['nomor_kain'];
		$jenis_kain = $_POST['jenis_kain'];
		$panjang_kain = $_POST['panjang_kain'];
		$harga_kain = $_POST['harga_kain'];
		$jenis_barang = $_POST['jenis_barang'];
		$detail_barang = $_POST['detail_barang'];
		$hasil_jumlah_barang = $_POST['hasil_jumlah_barang'];
		$harga_tiap_barang = $panjang_kain*$harga_kain/$hasil_jumlah_barang+$profit ;

		$data_update = array(
			'nomor_kain' => $nomor_kain,
			'jenis_kain' => $jenis_kain,
			'panjang_kain' => $panjang_kain,
			'harga_kain' => $harga_kain,
			'jenis_barang' => $jenis_barang,
			'detail_barang' => $detail_barang,
			'hasil_jumlah_barang' =>$hasil_jumlah_barang,
			'harga_tiap_barang' => $harga_tiap_barang
		);

		$where = array('nomor_kain' => $nomor_kain);
		$res = $this->Home_model->updateData('perencanaandata', $data_update, $where);
		if($res>=1){
			redirect('home/coba');
		} else {
			echo("Silahkan coba lagi!! masih gagal");
		}
	}
		
	//fungsi delete data
	public function hapusData($id){
		$this->Home_model->deleteData($id);
		$where = array('nomor_kain => $nomor_kain');
		$data = $this->Home_model->deleteData('perencanaandata', $where);
		echo "Sukses" ; 
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->index();
	}
}