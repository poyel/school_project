<?php
	class phns_search{
		private static $initialized = false;
		private static function initialize(){
			if (self::$initialized){
				return;
			}
			self::$initialized = true;
		}
		public static function get_year_combo($id,$name,$y){
			self::initialize();
			$y_1 = date('Y');
			$y_2 = $y_1 - 1;
			$ht = "<select id='$id' name='$name'>";
			$ht .= "<option value='$y_1' ".($y_1 == $y?"selected = selected":'').">$y_1</option>";
			$ht .= "<option value='$y_2' ".($y_2 == $y?"selected = selected":'').">$y_2</option>";
			$ht .= "</select>";
			return $ht;
		}
		
		public static function get_month_combo($id,$name,$m){
			self::initialize();
			$ht = "<select id='$id' name='$name'>";
			$ht .= "<option value='01' ".("01" == $m?"selected = selected":'').">GENNAIO</option>";
			$ht .= "<option value='02' ".("02" == $m?"selected = selected":'').">FEBBRAIO</option>";
			$ht .= "<option value='03' ".("03" == $m?"selected = selected":'').">MARZO</option>";
			$ht .= "<option value='04' ".("04" == $m?"selected = selected":'').">APRILE</option>";
			$ht .= "<option value='05' ".("05" == $m?"selected = selected":'').">MAGGIO</option>";
			$ht .= "<option value='06' ".("06" == $m?"selected = selected":'').">GIUGNO</option>";
			$ht .= "<option value='07' ".("07" == $m?"selected = selected":'').">LUGLIO</option>";
			$ht .= "<option value='08' ".("08" == $m?"selected = selected":'').">AGOSTO</option>";
			$ht .= "<option value='09' ".("09" == $m?"selected = selected":'').">SETTEMBRE</option>";
			$ht .= "<option value='10' ".("10" == $m?"selected = selected":'').">OTTOBRE</option>";
			$ht .= "<option value='11' ".("11" == $m?"selected = selected":'').">NOVEMBRE</option>";
			$ht .= "<option value='12' ".("12" == $m?"selected = selected":'').">DICEMBRE</option>";
			$ht .= "</select>";
			return $ht;
		}
		
		public static function get_usl_combo($id,$name,$us,$db){
			self::initialize();
			$db->_make_query("SELECT DISTINCT(usl) FROM stato ORDER BY usl ASC");
			$ht = "<select id='$id' name='$name' >";
            while ($riga_usl = $db->_get_next_row()) {
				$ht .= "<option value='{$riga_usl[usl]}' ".($riga_usl[usl] == $us?'selected':'').">{$riga_usl[usl]}</option>";
			}
			$ht .= "</select>";
			return $ht;
		}
		
		public static function get_recepit_image(){
			self::initialize();
		}
		
	}
?>
