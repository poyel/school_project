<?php
	session_start();
	include("static/php/include.php");
	include("static/php/inc/class.utils.inc.php");
	
	if(!array_key_exists("logged",$_SESSION)) {
		header("Location:index.php");
	}
	include($header);
	$page = "add_school";
	if(!in_array($page, $_SESSION["navigation_url"])){
		$_SESSION["navigation_url"][] = $page;
	}
	else{
		$idx = array_search($page,$_SESSION["navigation_url"]);
		$idx++;
		for($idx; $idx < count($_SESSION["navigation_url"]);$idx++){
			unset($_SESSION["navigation_url"][$idx]);
		}
	}
	
	include($navigation);
	//echo sp_utils::put_desktop($_SESSION["logged_user_id"]);
?>
<?php
	//include($footer);
?>