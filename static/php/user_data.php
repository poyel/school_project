	<div class="logo"></div>
	<div class="farma">
		<h2><?php echo array_key_exists("logged_user",$_SESSION)?$_SESSION["logged_user"]:"SCHOOL PROJECT 0.9.1"; ?></h2>
	</div>
	<div class="logout">
		<a href="<?php echo $logout; ?>"><div><img src="<?php echo $main_img."logout.png"; ?>"></div></a>
	</div>
