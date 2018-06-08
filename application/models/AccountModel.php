<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class AccountModel extends CI_Model {
	public function login($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user')->num_rows();	
	}	
	public function create($account){
		$this->db->insert('user',$account);
	}
	public function login_admin($username,$password){	
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin')->num_rows();
	}
	public function findall(){
		return $this->db->get('user')->result();
	}
	public function baiviet(){
		return $this->db->get('baiviet')->result();
	}
	public function search_baiviet($stt){
		$this->db->where('stt', $stt);
		return $this->db->get('baiviet')->row();
	}
	public function search_binhluan($stt){
		$this->db->where('baiviet', $stt);
		return $this->db->get('binhluan')->result();
	}
	public function them($data){
		$this->db->insert('baiviet',$data);
	}
	public function thembinhluan($data){
		$this->db->insert('binhluan',$data);
	}
	public function find($username) {
		$this->db->where('username', $username);
		return $this->db->get('user')->row();
	}
	public function delete($username) {
		$this->db->where('username', $username);
		$this->db->delete('user');
	}
	public function update($account) {
		$this->db->where('username', $account['username']);
		$this->db->set('password', md5($account['password']));
		$this->db->set('fullname', $account['fullname']);
		$this->db->set('sdt', $account['sdt']);
		$this->db->update('user');
	}
	public function updates($account) {
		$this->db->where('username', $account['username']);
		$this->db->set('password', $account['password']);
		$this->db->set('fullname', $account['fullname']);
		$this->db->set('sdt', $account['sdt']);
		$this->db->update('user');
	}
	public function updatebaiviet($bv) {
		$this->db->where('stt', $bv['stt']);
		$this->db->set('tieude', $bv['tieude']);
		$this->db->set('hinhanh', $bv['hinhanh']);
		$this->db->set('tomtat', $bv['tomtat']);
		$this->db->set('noidung', $bv['noidung']);
		$this->db->set('chuyenmuc', $bv['chuyenmuc']);
		$this->db->update('baiviet');
	}
	public function search($keyword){
		$this->db->like('tomtat', $keyword, 'both');
		$this->db->or_like('chuyenmuc', $keyword, 'both');
		return $this->db->get('baiviet')->result();
	}
			
}