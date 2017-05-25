<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	//buat input data
	public function tambahData($data){
		$this->db->insert('perencanaandata', $data);
	}
	//buat read data
	public function bacaData(){
		$data = $this->db->get('perencanaandata');
		return $data->result_array();
	}
	public function baca($nomor_kain){
		$sql = "select * from perencanaandata where nomor_kain = '$nomor_kain'";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	//untuk login
	function login_authen($username, $password){
		$sql ="select * from admin where username= '$username' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}
	
	//buat update data
	public function updateData($tabelName, $data, $where){
		$res=$this->db->update('perencanaandata', $data, $where);
		return $res;
	}
	//buat delete data
	public function deleteData($id){
		$data = $this->db->where('nomor_kain',$id)->delete('perencanaandata');
	}

	public function cariDetail($id){
	$hasil = $this->db->get_where('perencanaandata', array('nomor_kain'=>$id));
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
}
