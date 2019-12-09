<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mFunc');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('login');
    }
    public function login_checker(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email_admin' => $email,
            'pass_admin' => md5($password)
        );
        $check = $this->mFunc->loginData("tbl_admin",$where)->num_rows();
        if($check > 0){
            $data = array(
                'logged_in' => TRUE,
                'username' => $check->name_admin
            );
            $this->session->set_userdata($data);
            redirect(site_url('dashboard'));
        }else{
            echo"nrp atau password salah";
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url("dashboard"));
    }
}
