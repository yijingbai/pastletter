<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Letter_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function insertLetter($letter) {
		$data = array(
				"email" => $letter["email"],
				"title" => $letter["title"],
				"year" => $letter["year"],
				"month" => $letter["month"],
				"day" => $letter["day"],
				"type" => $letter["type"],
				"is_public" => $letter["is_public"],
				"user_id" => $letter["user_id"],
				"content" => $letter["content"],
				"language" => $letter["language"]
			);
		$sql = "INSERT INTO letter(email,title,year,month,day,type,is_public,user_id,content,language) VALUES(?,?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql,$data);
	}
	
	function likeLetterById($letter_id,$user_id) {
		$sql = "INSERT INTO user_like(user_id,letter_id) VALUES(?,?)";
		$query = $this->db->query($sql,array($user_id,$letter_id));
	}
	
	function delLetter($id) {
		$sql = "DELETE FROM letter WHERE letter_id = ?";
		$query = $this->db->query($sql,$id);
	}
	
	function delUserLetter($id,$userid) {
		$sql = "DELETE FROM letter WHERE letter_id = ? AND user_id=?";
		$query = $this->db->query($sql,array($id,$userid));
	}
	
	function modifyLetter($id,$letter) {
		$data = array(
				"title" => $letter["title"],
				"year" => $letter["year"],
				"month" => $letter["month"],
				"day" => $letter["day"],
				"type" => $letter["type"],
				"user_id" => $letter["user_id"],
				"is_public" => $letter["is_public"],
				"content" => $letter["content"],
				"language" => $letter["language"],
				"letter_id" => $id
			);
		$sql = "UPDATE letter SET title=?,year=?,month=?,day=?,is_public=?,type=?,user_id=?,content=?,language=? WHERE letter_id = ?";
		$query = $this->db->query($sql,$data);
	} 
	
	function setLetterSent($id) {
		$sql = "UPDATE letter SET is_sent=1 WHERE letter_id=?";
		$query = $this->db->query($sql,$id);
	}
	
	function updateLetter($id,$letter) {
		$data = array(
			"email" => $letter["email"],
			"is_public" => $letter["is_public"],
			"letter_id" => $id
		);
		$sql = "UPDATE letter SET email=?,is_public=? WHERE letter_id=?";
		$query = $this->db->query($sql,$data);
	}
	
	function getLetterToSendPast() {
		$sql = "SELECT * FROM `letter` WHERE year=year(now()) AND month=month(now()) AND day=day(now()) AND type=0";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getLetterToSendFuture() {
		$sql = "SELECT * FROM `letter` WHERE year=year(now()) AND month=month(now()) AND day=day(now()) AND type=1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getAllPublicLetterC() {
		$sql = "SELECT * FROM letter";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getAllPublicLetter($offset,$num) {		
		$sql = "SELECT A.*,B.name FROM letter A LEFT JOIN user B ON B.user_id = A.user_id limit ?,?";
		$query = $this->db->query($sql,array($offset,$num));
		return $query->result_array();
	}
	
	function getAllPublicLetterByType($type,$offset,$size) {
		$sql = "SELECT A.*,B.name FROM letter A LEFT JOIN user B ON B.user_id = A.user_id WHERE type = ?  limit ?,?";
		$query = $this->db->query($sql,array($type,$offset,$size));
		return $query->result_array();
	}
	
	function getAllPublicLetterByTypeC($type) {
		$sql = "SELECT * FROM letter WHERE type = ? ";
		$query = $this->db->query($sql,array($type));
		return $query->result_array();
	}
	
	function getAllPublicLetterSent($offset,$num) {
		$sql = "SELECT A.*,B.name FROM letter A LEFT JOIN user B ON B.user_id = A.user_id WHERE is_sent =1  limit ?,?";
		$query = $this->db->query($sql,array($offset,$num));
		return $query->result_array();
	}
	
	function getAllPublicLetterSentC() {
		$sql = "SELECT * FROM letter WHERE is_sent =1 ";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getAllPublicLetterUnsent($offset,$num) {
		$sql = "SELECT A.*,B.name FROM letter A LEFT JOIN user B ON B.user_id = A.user_id WHERE is_sent =0 limit ?,?";
		$query = $this->db->query($sql,array($offset,$num));
		return $query->result_array();
	}
	
	function getAllPublicLetterUnsentC() {
		$sql = "SELECT * FROM letter WHERE is_sent =0 ";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getPublicLetterById($id,$language) {
		$sql = "SELECT * FROM letter WHERE letter_id = ? AND language = ? AND is_public = 1";
		$query = $this->db->query($sql,array($id,$language));
		return $query->result_array();
	}
	
	function getPublicLetterByType($type,$language,$offset,$size) {
		$sql = "SELECT letter.*, IFNULL( ed.num, 0 ) likenum
		FROM (
		SELECT letter.letter_id lid, letter.title, count( * ) num
		FROM user_like, letter
		WHERE letter.letter_id = user_like.letter_id
		GROUP BY letter.letter_id, letter.title
		)ed
		RIGHT JOIN letter ON ed.lid = letter.letter_id 
		where letter.type=? AND letter.language = ? AND letter.is_public=1 ORDER BY letter.letter_id desc limit ?,?";
		$query = $this->db->query($sql,array($type,$language,$offset,$size));
		return $query->result_array();
	}
	
	function getPublicLetterByTypeC($type,$language) {
		$sql = "SELECT letter.*, IFNULL( ed.num, 0 ) likenum
		FROM (

		SELECT letter.letter_id lid, letter.title, count( * ) num
		FROM user_like, letter
		WHERE letter.letter_id = user_like.letter_id
		GROUP BY letter.letter_id, letter.title
		)ed
		RIGHT JOIN letter ON ed.lid = letter.letter_id 
		where letter.type=? AND letter.language = ? AND letter.is_public=1 ORDER BY letter.letter_id desc";
		$query = $this->db->query($sql,array($type,$language));
		return $query->result_array();
	}
	
	function getAllPublicFavoriteLetterC() {
		$sql = "SELECT letter.letter_id,letter.title,count(*)
		FROM user_like,letter
		where letter.letter_id=user_like.letter_id
		group by letter.letter_id,letter.title
		order by count(*) desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getAllPublicFavoriteLetter($offset,$size) {
		$sql = "SELECT letter.*,user.name,count(*) AS likenum
		FROM user_like,letter,user
		where letter.letter_id=user_like.letter_id AND letter.user_id=user.user_id
		group by letter.letter_id,letter.title
		order by count(*) desc limit ?,?";
		$query = $this->db->query($sql,array($offset,$size));
		return $query->result_array();
	}
	
	function getAllPublicFathestLetter($offset,$size) {
		$sql = "SELECT A.*,B.name FROM letter A LEFT JOIN user B ON B.user_id = A.user_id ORDER BY year desc limit ?,?";
		$query = $this->db->query($sql,array($offset,$size));
		return $query->result_array();
	}
	
	function getAllPublicFathestLetterC() {
		$sql = "SELECT * FROM letter  ORDER BY year";
		$query = $this->db->query($sql,array());
		return $query->result_array();
	}
	
	
	function getPublicLatestLetterPage($language,$offset,$size) {
		$sql = "SELECT * FROM letter WHERE language = ? ORDER BY letter_id limit ?,?";
		$query = $this->db->query($sql,array($language,$offset,$size));
		return $query->result_array();
	}
	
	function getPublicFavoriteLetterPage($language,$offset,$size) {
		$sql = "SELECT letter.*,user.name,count(*) AS likenum
		FROM user_like,letter,user
		where letter.letter_id=user_like.letter_id AND letter.user_id=user.user_id AND letter.language=?
		group by letter.letter_id,letter.title
		order by count(*) desc limit ?,?";
		$query = $this->db->query($sql,array($language,$offset,$size));
		return $query->result_array();
	}	
	
	function getPublicFavoriteLetterC($language) {
		$sql = "SELECT letter.*,user.name,count(*)
		FROM user_like,letter,user
		where letter.letter_id=user_like.letter_id AND letter.user_id=user.user_id AND letter.language=?
		group by letter.letter_id,letter.title
		order by count(*) desc";
		$query = $this->db->query($sql,array($language));
		return $query->result_array();
	}
	
	function getPublicFathestLetterPage($language,$offset,$size) {
		$sql = "SELECT letter.*, IFNULL( ed.num, 0 ) likenum
		FROM (

		SELECT letter.letter_id lid, letter.title, count( * ) num
		FROM user_like, letter
		WHERE letter.letter_id = user_like.letter_id
		GROUP BY letter.letter_id, letter.title
		)ed
		RIGHT JOIN letter ON ed.lid = letter.letter_id 
		WHERE letter.language = ? ORDER BY letter.year desc limit ?,?";
		$query = $this->db->query($sql,array($language,$offset,$size));
		return $query->result_array();
	}
	
	function getPublicFathestLetterC($language) {
		$sql = "SELECT * FROM letter WHERE language = ? ORDER BY year desc";
		$query = $this->db->query($sql,array($language));
		return $query->result_array();
	}
	
	function getPublicFathestPastLetterPage($language,$offset,$size) {
		$sql = "SELECT letter.*, IFNULL( ed.num, 0 ) likenum
		FROM (

		SELECT letter.letter_id lid, letter.title, count( * ) num
		FROM user_like, letter
		WHERE letter.letter_id = user_like.letter_id
		GROUP BY letter.letter_id, letter.title
		)ed
		RIGHT JOIN letter ON ed.lid = letter.letter_id 
			WHERE letter.language = ? ORDER BY letter.year limit ?,?";
		$query = $this->db->query($sql,array($language,$offset,$size));
		return $query->result_array();
	}
	
	function getPublicFathestPastLetterC($language) {
		$sql = "SELECT * FROM letter WHERE language = ? ORDER BY year";
		$query = $this->db->query($sql,array($language));
		return $query->result_array();
	}
	
	
	function getAllUserLetter($userid,$offset,$size) {
		$sql = "SELECT * FROM letter WHERE user_id = ? ORDER BY letter_id limit ?,?";
		$query = $this->db->query($sql,array($userid,$offset,$size));
		return $query->result_array();
	}
	
	function getAllUserLetterC($userid) {
		$sql = "SELECT * FROM letter WHERE user_id = ? ORDER BY letter_id";
		$query = $this->db->query($sql,array($userid));
		return $query->result_array();
	}
	
	function getUserLetterById($id,$userid) {
	    $sql = "SELECT * FROM letter WHERE letter_id = ? AND user_id =?";
		$query = $this->db->query($sql,array($id,$userid));
		return $query->result_array();
	}
	
	function getUserLetterByType($type,$userid) {
		$sql = "SELECT * FROM letter WHERE type = ? AND user_id = ?";
		$query = $this->db->query($sql,array($type,$userid));
		return $query->result_array();
	}
	
	function getUserLetterByTypeC($type,$userid) {
		$sql = "SELECT * FROM letter WHERE type = ? AND user_id = ?";
		$query = $this->db->query($sql,array($type,$userid));
		return $query->result_array();
	}
	
	function getUserLikeLetter($userid,$offset,$sum) {
		$sql = "SELECT * FROM letter WHERE letter_id IN (SELECT letter_id FROM user_like  WHERE user_id = ? GROUP BY letter_id) limit ?,?";
		$query = $this->db->query($sql,array($userid,$offset,$sum));
		return $query->result_array();
	}
	
	function getUserLikeLetterC($userid) {
		$sql = "SELECT * FROM letter WHERE letter_id IN (SELECT letter_id FROM user_like  WHERE user_id = ? GROUP BY letter_id )";
		$query = $this->db->query($sql,$userid);
		return $query->result_array();
	}
	
	function fuzzySearchPublicLetter($keyword,$language) {
		$this->db->like('title',$keyword);
		$this->db->or_like('content',$keyword);
		$this->db->where('language',$language);
		$query = $this->db->get('letter');
		return $query->result_array();
	}
	
	function fuzzySearchUserLetter($userid,$keyword,$language) {
		$this->db->like('title',$keyword);
		$this->db->or_like('content',$keyword);
		$this->db->where('language',$language);
		$this->db->where('user_id',$userid);
		$query = $this->db->get('letter');
		return $query->result_array();
	}
}