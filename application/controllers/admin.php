<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{ 
	public function index(){
		$this->load->view('admin/index');
	}
	public function check(){
		if($this->AccountModel->login_admin($_POST['username'], md5($_POST['password'])) == 1){
			$this->session->set_userdata(array('username_admin'=> $_POST['username']));
			redirect('adminlogin/login');
		}
		else{
			$data['error'] = "Tài khoản không chính xác";
			$this->load->view('admin/index', $data);
		}			
	}
}