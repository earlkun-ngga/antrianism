<?php 

session_start();

if($_SESSION['user']['id_admin'] == null) {header('Location:login_page.php'); }  

	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "../koneksi.php";
	


	$queri = mysqli_query($conn, "DELETE FROM tbl_antrian_live");

	$queri2 = mysqli_query($conn, "INSERT INTO tbl_antrian_live (no_antrian, status_dilayani) VALUES ('0', 'dummy_data') ");


	header('Location:index.php');


 ?>