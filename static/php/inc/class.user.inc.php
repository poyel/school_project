<?php
	//require("class.database.inc.php");
	class sp_user{
			private $_db;
			private $user_id;
			private $user;
			private $password;
			private $schoolname;
			private $is_logged;
			
			public function __construct($u,$p,$db = NULL){
				if(is_object($db)){
					$this->_db = $db;
				}
				else{
					$this->_db = new sp_database();
				}
				$this->set_logged(false);
				$this->set_user($u);
				$this->set_password($p);
			}
			
			public function __destructor(){
					unset($this->_db);
					unset($this->user);
					unset($this->password);
					unset($this->schoolname);
					unset($this->is_logged);
			}
			
			public function set_logged($value){
				$this->is_logged = $value;
			}
			
			public function set_user($value){
				$this->user = $value;
			}
			
			public function set_password($value){
				$this->password = $value;
			}
			
			public function set_schoolname($value){
				$this->schoolname = $value;
			}
			
			public function get_user(){
				return $this->user;
			}
			
			public function get_password(){
				return $this->password;
			}
			
			public function get_schoolname(){
				return $this->schoolname;
			}
			
			public function get_logged(){
				return $this->is_logged;
			}
			
			private function set_user_id($param){
				$this->user_id = $param;
			}
			
			public function get_user_id(){
				return $this->user_id;
			}
			
			public function make_login(){
				$u = $this->get_user();
				$p = $this->get_password();
				$sql = 	"select * from sp_users where user=:u and pass=MD5( :p ) LIMIT 1";
				$this->_db->_make_query($sql,array($u,$p));
				if($this->_db->_result_size() == 1){
					$res = $this->_db->_get_next_row();
					$this->set_logged(true);
					$this->set_user_id($res["id"]);
					return true;
				}
				return false;
			}
			
			public function make_logout(){
				
			}
	}
?>
