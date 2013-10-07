<?php
	class sp_utils{
		private static $initialized = false;
		private static function initialize(){
			if (self::$initialized){
				return;
			}
			self::$initialized = true;
		}
		
		public static function put_desktop($uid){
			self::initialize();
			$ht = "<nav id='desktop'>";
			$ht .= "<div onclick='add_new_school();'><img width='50px' src='static/img/sp_button_plus.png'><h3>AGGIUNGI ISTITUTO</h3></div>";
			$db = new sp_database();
			
			$sql = "select * from sp_school where sp_users_id = {$uid}";
			
			$db->_make_query($sql);
			
			if($db->_result_size()>0){
				while($r = $db->_get_next_row()){
					$ht .= "<div id=s_{$r['id']}><img width='50px' src='static/img/img_school.png'><h3>{$r['name']}</h3></div>";
				}
			}
			unset($db);
			
			$ht .= "</nav>";
			return $ht;
		}

		public static function put_labs($sid){
			self::initialize();
			$ht = "<nav id='desktop'>";
			$ht .= "<div onclick='add_new_school();'><img width='50px' src='static/img/sp_button_plus.png'><h3>AGGIUNGI LABORATORIO</h3></div>";
			$db = new sp_database();
			
			$sql = "select * from sp_lab where sp_school_id = {$sid}";
			
			$db->_make_query($sql);
			
			if($db->_result_size()>0){
				while($r = $db->_get_next_row()){
					$ht .= "<div id=s_{$r['id']}><img width='50px' src='static/img/img_school.png'><h3>{$r['name']}</h3></div>";
				}
			}
			unset($db);
			
			$ht .= "</nav>";
			return $ht;
		}

		public static function get_label_url($p){
			self::initialize();
			switch($p){
				case "main":return "Home";
				case "school": return $_SESSION["selected_school_label"];
				case "lab": return "Laboratio";//$_SESSION["selected_lab_label"];
				case "add_school": return "Aggiungi Istituto";
			}
		}
		
	}
?>
