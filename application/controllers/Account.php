<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends My_Controller{
	function __construct(){ 
		parent::__construct(); 
	}
	public function index(){
	}
			
	public function login(){
		if($this->session->userdata('username')!=null) {
			$this->load->library('pagination'); 
			$this->load->helper('url');
			$config['base_url'] = base_url('account/login'); 
			$config['total_rows'] = $this->Book_Model->baiviet_count_all(); 
			$config['per_page'] = 14;  
			$config['uri_segment'] = 3; 
			$this->pagination->initialize($config);
			$data['baiviet'] = $this->Book_Model->baiviet_all($config['per_page'],$this->uri->segment(3)); 
			$data['page']='template/baiviet';
			$this->load->view('template/index',$data);
		}else{
			redirect('account/index');
		}
	}
	public function add(){
		$this->load->view('account/add');
	}
	public function addnews(){
		$data = array(
		'username' => $this->input->post('username'),
		'password' => md5($this->input->post('password')),
		'fullname' => $this->input->post('fullname'),
		'sdt' => $this->input->post('sdt')
		);
		$this->AccountModel->create($data);
		redirect('account/index');
	}
	public function logout(){
		$this->session->unset_userdata('username');
		redirect('account/index');
	}
	public function view($stt){
		$data['baiviet']=$this->AccountModel->search_baiviet($stt);
		$data['binhluan']=$this->AccountModel->search_binhluan($stt);
		$data['page']='template/noidung';
		$this->load->view('template/index', $data);

	}
	public function thembinhluan(){
		$this->AccountModel->thembinhluan($_POST);
		$data['baiviet']=$this->AccountModel->search_baiviet($this->input->post('baiviet'));
		$data['binhluan']=$this->AccountModel->search_binhluan($this->input->post('baiviet'));
		$data['page']='template/noidung';
		$this->load->view('template/index', $data);
	}
	public function taikhoan(){
		$data['taikhoan']=$this->AccountModel->find($this->session->userdata('username'));
		$data['page']='template/taikhoan';
		$this->load->view('template/index',$data);
	}
	public function dmk(){
		$data['page']='template/dmk';
		$this->load->view('template/index',$data);
	}
	public function update(){
		if($this->AccountModel->login($this->session->userdata('username'), md5($_POST['password'])) == 1){
			$account = $this->AccountModel->find($this->session->userdata('username'));
			$data = array(
				'username' => $account->username,
				'password' => $this->input->post('new_password'),
				'fullname' => $account->fullname,
				'sdt' => $account->sdt);
			$this->AccountModel->update($data);
			redirect('account/taikhoan');
		}else{
			redirect('account/dmk');	
		}
		
	}
	public function edit(){
		$data['page']='template/edit';
		$this->load->view('template/index',$data);
	}
	public function edits(){
		if($this->AccountModel->login($this->session->userdata('username'), md5($_POST['password'])) == 1){
			$account = $this->AccountModel->find($this->session->userdata('username'));
			$data = array(
				'username' => $account->username,
				'password' => $account->password,
				'fullname' => $this->input->post('fullname'),
				'sdt' => $this->input->post('sdt'));
			$this->AccountModel->updates($data);
			redirect('account/taikhoan');
		}else{
			redirect('account/edit');	
		}
	}
	public function gioithieu(){
		$data['page']='template/gioithieu';
		$this->load->view('template/index',$data);
	}
	public function search(){
		$data['page']='template/search';
		$this->load->view('template/index',$data);
	}
	public function searchs(){
		$data['baiviet'] = $this->AccountModel->search($_POST['keyword']);
		$data['key']=$_POST['keyword'];
		$data['page']='template/search';
		$data['page2']='template/tim';
		$this->load->view('template/index',$data);
	}
	public function timro(){
		$data['baiviet'] = $this->Book_Model->timro();
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
	public function timto(){
		$data['baiviet'] = $this->Book_Model->timto();
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
	public function tim1(){
		$key='lời yêu thương';
		$data['baiviet'] = $this->Book_Model->tim($key);
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
	public function tim2(){
		$key='love full';
		$data['baiviet'] = $this->Book_Model->tim($key);
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
	public function tim3(){
		$key='nhật kí tình yêu';
		$data['baiviet'] = $this->Book_Model->tim($key);
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
	public function tim4(){
		$key='truyện ngắn';
		$data['baiviet'] = $this->Book_Model->tim($key);
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
		public function tim5(){
		$key='truyện dài';
		$data['baiviet'] = $this->Book_Model->tim($key);
		$data['page']='template/timro';
		$this->load->view('template/index',$data);
	}
}