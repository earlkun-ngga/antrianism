<?php 

	
	include "../koneksi.php";
	session_start();



	$queri = mysqli_query($conn, "UPDATE tbl_admin SET username = '".$_POST['username']."', nama_lengkap = '".$_POST['nama_lengkap']."' WHERE id_admin = '".$_SESSION['user']['id_admin']."' ");

	$_SESSION['user']['username'] = $_POST['username'];
	$_SESSION['user']['nama_lengkap'] = $_POST['nama_lengkap'];

	header('Location:index.php');
 ?>