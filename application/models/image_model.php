<?php
class Image_model extends CI_Model {
	public function __construct() {
			
	}
	
	public function insertImage($image) {
		$data = array('src' => $image["src"],
					  'type' => $image["type"],
					  'title' => $image["title"],
					  'titlea' => $image["titlea"],
					  'imagea' => $image["imagea"],
					  "page" =>$image["page"],
					  "level" => $image["level"],
					  "language" => $image["language"]
				);
		$sql = "INSERT INTO image(src,type,title,titlea,imagea,page,level,language) VALUES(?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql,$data);	
	}
	
	public function delImage($id) {
		$sql = "DELETE FROM image WHERE image_id = ?";
		$query = $this->db->query($sql,$id);
	}
	
	public function setImageLevel($id,$level) {
		$sql = "UPDATE image SET level = ? WHERE id =?";
		$query = $this->db->query($sql,array($level,$id));
	}
	
	public function setImagePage($id,$page) {
		$sql = "UPDATE image SET level = ? WHERE id = ?";
		$query = $this->db->query($sql,array($page,$id));
	}
	
	public function setImageTitle($id,$title) {
		$sql = "UPDATE image SET title = ? WHERE id = ?";
		$query = $this->db->query($sql,array($title,$id));
	}
	
	public function setImageTitleA($id,$page) {
		$sql = "UPDATE image SET titlea= ? WHERE id = ?";
		$query = $this->db->query($sql,array($page,$id));
	}
	
	public function setImageSrc($id,$src) {
		$sql = "UPDATE image SET src = ? WHERE id = ?";
		$query = $this->db->query($sql,array($src,$id));
	}
	
	public function setImageA($id,$imagesrc) {
		$sql = "UPDATE image SET imagea = ? WHERE id =?";
		$query = $this->db->query($sql,array($iamgesrc,$id));
	}
	
	public function modifyImage($id,$image) {
		$data = array(
					  'type' => $image["type"],
					  'title' => $image["title"],
					  'titlea' => $image["titlea"],
					  'imagea' => $image["imagea"],
					  "page" =>$image["page"],
					  "level" => $image["level"],
					  "language" => $image["language"],
					  "id" => $id
				);
		$sql = "UPDATE image SET type=?,title=?,titlea=?,imagea=?,page=?,level=?,language=? WHERE image_id=?";
		$query = $this->db->query($sql,$data);		
	}
	
	public function getimages($imageid = FALSE) {
		if ($imageid == FALSE) {
			$query = $this->db->get('image');
			return $query->result_array();	
		}
		
		$query = $this->db->get_where('image',array('image_id' => $imageid));
		return $query->result_array();
	}
	
	
	
	public function fuzzySearchimage($keyword) {
		$this->db->like('title',$keyword);
		$query = $this->db->get('image');
		return $query->result_array();
	}
	
	public function getImageByPage($page) {
		$sql = "SELECT * FROM image WHERE page = ?";
		$query = $this->db->query($sql,$page);
		return $query->result_array();
	}

	
	public function getShowImage() {
		$sql = "SELECT * FROM image WHERE page != 0";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getFirstPageImage() {
		$sql = "SELECT * FROM image WHERE page = 1  ORDER BY image_id desc";
		$query = $this->db->query($sql);
		return $query->result_array();	
	}
	
	public function getBigImage() {
		$sql = "SELECT * FROM image WHERE page = 1 AND type = 1 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
 	public function getLogo() {
		$sql = "SELECT * FROM image WHERE type = 4 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getMiddleImage() {
		$sql = "SELECT * FROM image WHERE page =1 AND type =2 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getBottomImage() {
		$sql = "SELECT * FROM image WHERE page =1 AND type =3 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getSecondBottomImage() {
		$sql = "SELECT * FROM image WHERE page =2 AND type =3 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getSecondTopImage() {
		$sql = "SELECT * FROM image WHERE page =2 AND type =1 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}	
	
	public function getThirdTopImage() {
		$sql = "SELECT * FROM image WHERE page =3 AND type =1 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getThirdBottomImage() {
		$sql = "SELECT * FROM image WHERE page =3 AND type =3 ORDER BY level desc";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function getImageByPageLevel($page,$level) {
		$sql = "SELECT * FROM image WHERE page = ? AND level =?";
		$query = $this->db->query($sql,array($page,$level));
	}
	
	public function countAllImage() {
		$sql = "SELECT count(*) AS amount FROM image";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function listAllImagePage($offset,$num) {
		$sql = "SELECT * FROM image ORDER BY image_id desc limit ?,? ";
		$query = $this->db->query($sql,array($offset,$num));
		return $query->result_array();
	}
	
	
}
 
