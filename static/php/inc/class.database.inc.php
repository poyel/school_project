<?php
	class sp_database{
		private $_db;
		private $_result;
		
		public function __construct($db = NULL){
			if(is_object($db)){
				$this->_db = $db;
			}
			else{
				$dsn = "mysql:host=".DB_URL.";dbname=".DB_NAME;
				$this->_db = new PDO($dsn, DB_USER, DB_PASS);
				$this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
			}
		}
		
		public function _make_query($vsql,$params = NULL){
			if($this->_result = $this->_set_query($vsql)){
				if(is_array($params)){
					$arr = $this->_strip_query_params($vsql);
					$this->_bind_query($arr,$params);
				}
				$this->_result->execute();
			}
		}
		
		private function _strip_query_params($vsql){
			preg_match_all("/:[\w+]*/",$vsql,$arr);
			return $arr[0];
		}
		
		private function _set_query($vsql){
			return $this->_db->prepare($vsql);
		}
		
		private function _bind_query($binded_params,$params){
			for($i = 0; $i < count($binded_params); $i++){
				$this->_result->bindParam($binded_params[$i], $params[$i], PDO::PARAM_STR);
			}
		}
		
		public function _get_result(){
			return $this->_result;
		}
		
		public function _get_next_row(){
			return $this->_result->fetch();
		}
		
		public function _result_size(){
			if(!$this->_db){
					return 0;
			}
			return $this->_result->rowCount();
		}
		
		public function _change_database($database_name){
			$this->query("USE ".$database_name);
		}
	}
?>
