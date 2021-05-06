<?php 

	session_start();

	session_destroy();
	// cambiarlo por el index.php
	header("location: index.php");
	exit();

?>