<?php
class User_model extends CI_Model {
	public function __construct() {
			
	}
	
	public function insertUser($user) {
		$data = array('name' => $user["name"],
					  'pass' => $user["pass"],
					  'email' => $user["email"],
					  'status' => $user["status"],
					'actionkey' => $user["actionkey"]
				);
		$sql = "INSERT INTO user(name,password,email,status,actionkey) VALUES(?,?,?,?,?)";
		$query = $this->db->query($sql,$data);	
	}
	
	public function deluser($id) {
		$sql = "DELETE FROM user WHERE user_id = ?";
		$query = $this->db->query($sql,$id);
	}
	
	public function fuzzySearchUser($keyword) {
		$this->db->like('name',$keyword);
		$query = $this->db->get('user');
		return $query->result_array();
	}
	
	public function getUsersC($userid = FALSE) {
		if ($userid == FALSE) {
			$query = $this->db->get('user');
			return $query->result_array();	
		}
		
		$query = $this->db->get_where('user',array('user_id' => $userid));
		return $query->result_array();
	}
	
	public function getUsers($offset,$num) {
		$sql = "SELECT * FROM user ORDER BY user_id desc limit ?,?";
		$query = $this->db->query($sql,array($offset,$num));
		return $query->result_array();
	}
	
	public function getUserById($userid) {
			$query = $this->db->get_where('user',array('user_id' => $userid));
			return $query->result_array();
	}
	
	public function getUserByName($name) {
		$query = $this->db->get_where('user', array('name' => $name));
		return $query->result_array();
	}
	
	public function getUnvalidUser($offset,$num) {
		$sql = "SELECT * FROM user WHERE status = 0 ORDER BY user_id desc limit ?,?";
		$query = $this->db->query($sql,array($offset,$num));
		return $query->result_array();
	}
	 
	public function getUnvalidUserC() {
		$sql = "SELECT * FROM user WHERE status = 0 ORDER BY user_id desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	
	public function getUserByEmail($name) {
		$sql = "SELECT * FROM user WHERE email = ?";
		$query = $this->db->query($sql,$name);
		return $query->result_array();
	}
	
	public function getUserByActionkey($key) {
		$sql = "SELECT * FROM user WHERE actionkey = ?";
		$query = $this->db->query($sql,$key);
		return $query->result_array();
	}
	
	public function setValidByKey($key) {
		$sql = "UPDATE user SET status = 1 WHERE actionkey=?";
		$query = $this->db->query($sql,$key);		
	}
	
	public function setPassById($pass,$id) {
		$sql = "UPDATE user SET password = ? WHERE user_id=?";
		$query = $this->db->query($sql,array($pass,$id));		
	}
	
	public function modifyuser($id,$user) {
		$data = array('name' => $user["name"],
					  'pass' => $user["pass"],
					  'email' => $user["email"] ,
					  'userid' => $id
				);
		$sql = "UPDATE user SET name=?,password=?,email=? WHERE userid=?";
		$query = $this->db->query($sql,$data);		
	}
}
 
