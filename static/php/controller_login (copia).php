<?php
	session_start();
	if(!empty($_POST["user"]) && !empty($_POST["password"])){
		$a = $_POST["user"];
		$b = $_POST["password"];
		$o = new sp_user($a,$b);
		$ok = $o->make_login();
		if(!empty($ok)){
			$_SESSION["logged"] = $o->get_logged();
			$_SESSION["logged_user"] = $o->get_user();
			header("Location:main.php");
		}
	}
?>
