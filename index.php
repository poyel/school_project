<?php
	session_start();
	include("static/php/include.php");
	include($header);
	if(!array_key_exists("user_props",$_SESSION)){
		include($login);
	}
	if(!empty($_POST)){
		include($controller_login);
	}
	//include($footer);
?>
