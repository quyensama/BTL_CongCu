<?php 
	trait ModelCategories{
		public function modelListCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=$category_id");
			return $query->fetchAll();
		}
		public function modelListCategories(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			return $query->fetchAll();
		}
	}
 ?>