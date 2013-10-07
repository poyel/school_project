<?php
	session_start();

	if(array_key_exists("sid", $_POST)){
		$_SESSION["selected_school_id"] = $_POST["sid"];
		$_SESSION["selected_school_label"] = $_POST["slabel"];
	}
	else{
		echo "Errore durante trasmissione dati";
	}
?>