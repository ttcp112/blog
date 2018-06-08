 <?php 
    class Book_Model extends CI_Model{ 
        function __construct(){ 
            $this->load->database(); 
        } 
         
        // lấy dữ liệu theo từng phần 
        function list_all($number, $offset){ 
            $query =  $this->db->get('user',$number,$offset); 
            return $query->result(); 
        } 
         
        // đếm tổng số record trong table user
        function count_all(){ 
            return $this->db->count_all('user'); 
        }
		function baiviet_all($number, $offset){
			$query =  $this->db->get('baiviet',$number,$offset); 
            return $query->result(); 
		}
		function baiviet_count_all(){ 
            return $this->db->count_all('baiviet'); 
        } 
		function binhluan(){
			return $this->db->get('binhluan')->result();
		}
		function binhluan_count_all(){ 
            return $this->db->count_all('binhluan'); 
        } 
		function binhluan_all($number, $offset){
			$query =  $this->db->get('binhluan',$number,$offset); 
            return $query->result(); 
		}
		function timro(){ 
			$this->db->where('chuyenmuc','lời yêu thương');
			$this->db->or_where('chuyenmuc','love full');
			$this->db->or_where('chuyenmuc','nhật kí tình yêu');
            return $this->db->get('baiviet')->result(); 
        } 
		function timto(){ 
			$this->db->where('chuyenmuc','truyện ngắn');
			$this->db->or_where('chuyenmuc','truyện dài');
            return $this->db->get('baiviet')->result(); 
        } 
		function tim($key){ 
			$this->db->where('chuyenmuc',$key);
            return $this->db->get('baiviet')->result(); 
        } 
    } 
?>