<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('mFunc');
        $this->load->library('session');
    }
	public function mapbox()
	{
		$result['data'] = $this->mFunc->showDataMap();
		$this->load->view('mapbox',$result);
	}
	public function heredev()
	{
		$this->load->view('heredev');
	}
	public function tgbaru(){
		$this->load->view('tkgeo');
	}
	public function mazemap()
	{
		$this->load->view('mazemap');
	}
}
