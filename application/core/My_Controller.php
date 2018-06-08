<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$name=$this->uri->segment(1);
		if($name=="account"){
			if($this->session->userdata('username')==null) {
				redirect('login/index');
			}
		}
		if($name=='adminlogin'){
			if($this->session->userdata('username_admin')==null) {
				redirect('admin/index');
			}
		}	
	}
}

?>
