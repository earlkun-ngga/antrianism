
<?php 
	
	session_start();
	$_SESSION['nilai_antrian'] = 1;

	header('Location:ambil_antrian.php');

 ?>