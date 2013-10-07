<?php
	switch($page){
		case "main":
			unset($_SESSION["selected_school_id"]);
			unset($_SESSION["selected_school_label"]);
			unset($_SESSION["selected_lab_id"]);
			unset($_SESSION["selected_lab_label"]);
		break;
		case "school":
			unset($_SESSION["selected_lab_id"]);
			unset($_SESSION["selected_lab_label"]);
		break;
	}
?>
<ul class="breadcrumb">
	<?php
		for($i = 0; $i < count($_SESSION["navigation_url"]); $i++){
	?>
		<li><a href="<?=$_SESSION["navigation_url"][$i];?>.php"><?php echo sp_utils::get_label_url($_SESSION["navigation_url"][$i])?></a></li>
	<?php
		}
	?>
	
</ul>
