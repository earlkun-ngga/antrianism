<?php 

	session_start();
	if($_SESSION['user']['id_admin'] == null) {header('Location:login_page.php'); }
	include "koneksi.php";


	date_default_timezone_set('Asia/Bangkok');

	$iddataantrian = $_GET['id_data'];


	// echo $iddataantrian;

	$waktu_selesai = Date('d - M - Y H:i:s');



	$queri = mysqli_query($conn, "UPDATE tbl_antrian_live SET status_dilayani = 'sudah dilayani', waktu_selesai_dilayani = '".$waktu_selesai."', id_admin_melayani = '".$_SESSION['user']['id_admin']."' WHERE id_data = '".$iddataantrian."' ");



	header('Location:index.php');


 ?>