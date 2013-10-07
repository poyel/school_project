<?php
	session_start();
	include("static/php/include.php");
	include("static/php/inc/class.utils.inc.php");
	if(empty($_SESSION["logged"])){
		header("Location:index.php");
	}
	include($header);
	$page = "school";
	if(!in_array($page,$_SESSION["navigation_url"])){
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
	echo sp_utils::put_labs($_SESSION["selected_school_id"]);
	//include($footer);
?>
