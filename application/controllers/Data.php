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
		$result['maps'] = $this->mFunc->showData('tbl_maps');
		$this->load->view('data',$result);
	}
	public function createdata(){
		$result['arus'] = $this->mFunc->showData('tbl_arus');
		$result['wilayah'] = $this->mFunc->showData('tbl_wilayah');
		$result['jalan'] = $this->mFunc->showData('tbl_jalan');
		$result['keramaian'] = $this->mFunc->showData('tbl_keramaian');
		$this->load->view('inputdata', $result);
	}
	public function inputdata(){
		$wilayah = $this->input->post('wilayah');
		$arus = $this->input->post('arus');
		$kondisi = $this->input->post('kondisi');
		$keramaian = $this->input->post('keramaian');
		$panjang = $this->input->post('panjang');
		$lebar = $this->input->post('lebar');
		$lat = $this->input->post('lat');
		$long = $this->input->post('long');

		$data = array(
			'nama_wilayah' => $wilayah,
			'arus_jalan' => $arus,
			'kondisi_jalan' => $kondisi,
			'keramaian_jalan' => $keramaian,
			'panjang_lubang' => $panjang,
			'lebar_lubang' => $lebar,
			'lattitude' => $lat,
			'longitude' => $long,
		);

		$this->mFunc->addData('tbl_maps',$data);
		redirect('Data/index');
	}
	public function editdata($id){
		$where = array(
			'id_maps' => $id
		);
		$result['arus'] = $this->mFunc->showData('tbl_arus');
		$result['wilayah'] = $this->mFunc->showData('tbl_wilayah');
		$result['jalan'] = $this->mFunc->showData('tbl_jalan');
		$result['keramaian'] = $this->mFunc->showData('tbl_keramaian');
		$result['data'] = $this->mFunc->editData('tbl_maps',$where);
		$this->load->view('editdata', $result);
	}
}
