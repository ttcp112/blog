<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminlogin extends My_Controller{
	function __construct(){ 
		parent::__construct(); 
	}
	public function login(){
		if($this->session->userdata('username_admin')!=null) {
				$this->load->view('admin/quantri');
		}else{
			redirect('admin');
		}
	}
	public function blog(){
		$this->session->set_userdata(array('username'=> $this->session->userdata('username_admin')));
		$data['baiviet']=$this->AccountModel->baiviet();
		$data['page']='template/baiviet';
		$this->load->view('template/index',$data);
	}
	public function logout(){
		$this->session->unset_userdata('username_admin');
		redirect('admin');
	}
	public function viewuser(){
		$this->load->library('pagination'); 
		$this->load->helper('url'); // cấu hình phân trang 
		$config['base_url'] = base_url('adminlogin/viewuser'); // xác định trang phân trang 
		$config['total_rows'] = $this->Book_Model->count_all(); // xác định tổng số record 
		$config['per_page'] = 15; // xác định số record ở mỗi trang 
		$config['uri_segment'] = 3; // xác định segment chứa page number 
		$this->pagination->initialize($config);
		$data['data'] = $this->Book_Model->list_all($config['per_page'],$this->uri->segment(3)); 
		$data['page']='admin/viewuser';
		$this->load->view('admin/quantri',$data);    
	}
	
	public function baiviet(){
		$this->load->library('pagination'); 
		$this->load->helper('url'); 
		$config['base_url'] = base_url('adminlogin/baiviet');  
		$config['total_rows'] = $this->Book_Model->baiviet_count_all();  
		$config['per_page'] = 15;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['data'] = $this->Book_Model->baiviet_all($config['per_page'],$this->uri->segment(3)); 		$data['page']='admin/baiviet';
		$this->load->view('admin/quantri',$data);
		
	}
	public function them(){
		$data['page']='admin/them';
		$this->load->view('admin/quantri',$data);
	}
	public function thembaiviet(){
		$this->AccountModel->them($_POST);
		$data['them']= 'thêm thành công';
		redirect('admin/them',$data);
	}
	public function binhluan(){
		$this->load->library('pagination'); 
		$this->load->helper('url'); 
		$config['base_url'] = base_url('adminlogin/binhluan');  
		$config['total_rows'] = $this->Book_Model->binhluan_count_all();
		$config['per_page'] = 15;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['data'] = $this->Book_Model->binhluan_all($config['per_page'],$this->uri->segment(3));
		$data['page']='admin/viewbinhluan';
		$this->load->view('admin/quantri',$data);
	}
	public function inforuser($username){
		$data['user']=$this->AccountModel->find($username);
		$data['page']='admin/user';
		$this->load->view('admin/quantri',$data);
	}
	public function deleteuser($username){
		$this->AccountModel->delete($username);
		redirect('adminlogin/viewuser');
	}
	public function xembaiviet($stt){
		$data['baiviet']=$this->AccountModel->search_baiviet($stt);
		$data['page']='admin/xembaiviet';
		$this->load->view('admin/quantri',$data);
	}
	public function suabaiviet(){
		$this->AccountModel->updatebaiviet($_POST);
		redirect('adminlogin/baiviet');
	}
}