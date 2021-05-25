<?php
	session_start();
	session_destroy();
	header("location:cPanelLogin.php");
?>