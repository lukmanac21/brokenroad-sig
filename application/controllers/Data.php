<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('mFunc');
        $this->load->library('session');
    }
	public function index()
	{
		$result['maps'] = $this->mFunc->showDataMap();
		$this->load->view('data',$result);
	}
	public function list_jalan(){
		$id_wilayah = $this->input->post('id_wilayah');
        $jalan = $this->mFunc->listJalan($id_wilayah);

        $lists = "";
    
    foreach($jalan as $data){
	  $lists .= "<option>--Pilih Nama Jalan--</option> 
	  <option value='".$data->id_jalan."'>".$data->nama_jalan."</option>";
    }
        $callback = array('list_jalan'=>$lists);
        echo json_encode($callback);
	}
	public function createdata(){
		$result['wilayah'] 		= $this->mFunc->showData('tbl_wilayah');
		$result['arus'] 		= $this->mFunc->showData('tbl_arus');
		$result['jalan'] 		= $this->mFunc->showData('tbl_jalan');
		$result['keramaian']	= $this->mFunc->showData('tbl_keramaian');
		$result['type'] 		= $this->mFunc->showData('tbl_type');
		$result['material'] 	= $this->mFunc->showData('tbl_material');
		$result['kerusakan'] 	= $this->mFunc->showData('tbl_kerusakan');
		$this->load->view('inputdata', $result);
	}
	public function inputdata(){
		$id_wilayah 	= $this->input->post('id_wilayah');
		$id_arus 		= $this->input->post('id_arus');
		$id_jalan 		= $this->input->post('id_jalan');
		$id_keramaian 	= $this->input->post('id_keramaian');
		$id_type 		= $this->input->post('id_type');
		$id_material 	= $this->input->post('id_material');
		$id_kerusakan	= $this->input->post('id_kerusakan');
		$lat 			= $this->input->post('lat');
		$long 			= $this->input->post('long');

		$data = array(
			'id_wilayah' 		=> $id_wilayah,
			'id_arus' 			=> $id_arus,
			'id_jalan' 			=> $id_jalan,
			'id_keramaian' 		=> $id_keramaian,
			'id_type' 			=> $id_type,
			'id_material' 		=> $id_material,
			'id_kerusakan' 		=> $id_kerusakan,
			'lattitude' 		=> $lat,
			'longitude' 		=> $long
		);

		$this->mFunc->addData('tbl_maps',$data);
		redirect('Data/index');
	}
	public function editdata($id){
		$where = array(
			'id_maps' => $id
		);
		$result['data'] 		= $this->mFunc->showDataMaps('tbl_maps',$where);
		$result['arus'] 		= $this->mFunc->showData('tbl_arus');
		$result['jalan'] 		= $this->mFunc->showData('tbl_jalan');
		$result['wilayah'] 		= $this->mFunc->showData('tbl_wilayah');
		$result['keramaian'] 	= $this->mFunc->showData('tbl_keramaian');
		$result['type']	 		= $this->mFunc->showData('tbl_type');
		$result['material'] 	= $this->mFunc->showData('tbl_material');
		$result['kerusakan'] 	= $this->mFunc->showData('tbl_kerusakan');
		$this->load->view('editdata', $result);
	}
	public function updatedata(){
		$id = $this->input->post('id');
		$where = array(
			'id_maps' => $id
		);
		$id_wilayah 	= $this->input->post('id_wilayah');
		$id_arus 		= $this->input->post('id_arus');
		$id_jalan 		= $this->input->post('id_jalan');
		$id_keramaian 	= $this->input->post('id_keramaian');
		$id_type 		= $this->input->post('id_type');
		$id_material 	= $this->input->post('id_material');
		$id_kerusakan	= $this->input->post('id_kerusakan');
		$lat 			= $this->input->post('lat');
		$long 			= $this->input->post('long');

		$data = array(
			'id_wilayah' 		=> $id_wilayah,
			'id_arus' 			=> $id_arus,
			'id_jalan' 			=> $id_jalan,
			'id_keramaian' 		=> $id_keramaian,
			'id_type' 			=> $id_type,
			'id_material' 		=> $id_material,
			'id_kerusakan' 		=> $id_kerusakan,
			'lattitude' 		=> $lat,
			'longitude' 		=> $long
		);
		$this->mFunc->updateData('tbl_maps',$data, $where);
		redirect('Data/index');
	}
	public function deleteData(){
		$id = $this->input->post('id');
		$where = array(
			'id_maps' => $id
		);
		$this->mFunc->deleteData('tbl_maps', $where);
		redirect('Data/index');
	}
}
