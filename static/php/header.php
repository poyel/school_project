<!DOCTYPE html>
<html>
	<head>
		<title>School Project 0.9.1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
		<meta name="owner" content = "School Project">
		<meta name = "developer" content = "Marco Alessio Milazzo">
		<meta name = "generator" content="geany">
		<link rel="stylesheet" type="text/css" href="<?php echo $main_style; ?>" />
		<!--<link rel="stylesheet" type="text/css" href="<?php echo $main_jquery_ui_style; ?>" />
		<script type="text/javascript" src="<?php //echo $main_jquery; ?>"></script>
		<script type="text/javascript" src="<?php //echo $main_jquery_ui; ?>"></script>-->
		<script type="text/javascript" src="<?php echo $main_script; ?>"></script>
		<script type="text/javascript" src="<?php echo $main_jquery; ?>"></script>
		<script type="text/javascript" src="<?php echo $main_jquery_ui; ?>"></script>
	</head>
<body>
	<div id="page">
		<header>
			<?php
				include($user_data);
			?>
		</header>
		<?php
			if(!empty($_SESSION["logged"])){
				include($toolbar);
			}
		?>
		<div id="main-wrapper">
			<div id="main-content">
