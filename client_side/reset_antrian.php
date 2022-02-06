<?php 

	session_start();

	$_SESSION['nilai_antrian'] = 0;

	header('Location:ambil_antrian.php');

 ?>