<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$this->load->view('account/index');
	}
	public function processLogin()
	{	
		if($this->AccountModel->login($_POST['username'], md5($_POST['password'])) == 1){
			$this->session->set_userdata(array('username' => $_POST['username']));
			redirect('account/login');
		}else{
			$data['error'] = "Tài khoản không chính xác";
			$this->load->view('account/index', $data);	
		}
	}
}