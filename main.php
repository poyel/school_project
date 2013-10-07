<?php
	session_start();
	include("static/php/include.php");
	include("static/php/inc/class.utils.inc.php");
	
	if(!array_key_exists("logged",$_SESSION)) {
		header("Location:index.php");
	}
	include($header);
	$page = "main";
	$_SESSION["navigation_url"] = array($page);
	include($navigation);
	echo sp_utils::put_desktop($_SESSION["logged_user_id"]);
?>
	<script>
		$("div[id^='s_']").on("click",function(){
			var label = $(this).find("h3").text();
			set_sid($(this).attr("id"),label);
		});
	</script>
<?php
	//include($footer);
?>
