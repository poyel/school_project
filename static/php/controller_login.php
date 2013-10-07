<?php
	if(!session_id()){
		session_start();
	}
	if(!empty($_POST["user"]) && !empty($_POST["password"])){
		$a = $_POST["user"];
		$b = $_POST["password"];
		$o = new sp_user($a,$b);
		$ok = $o->make_login();
		if($ok){
			$_SESSION["logged"] = $o->get_logged();
			$_SESSION["logged_user"] = $o->get_user();
			$_SESSION["logged_user_id"] = $o->get_user_id();
			unset($o);
			header("Location:main.php");
		}
		else{
			echo "<script>show_error_notification('#main-wrapper','UTENTE NON TROVATO');</script>";
		}
	}
?>
