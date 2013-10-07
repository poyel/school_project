<?php
	session_start();

	if(array_key_exists("lid", $_POST)){
		$_SESSION["selected_lab_id"] = $_POST["lid"];
		$_SESSION["selected_lab_label"] = $_POST["llabel"];
	}
	else{
		echo "Errore durante trasmissione dati";
	}
?>