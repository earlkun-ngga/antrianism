	<?php
session_start();

if($_SESSION['user']['id_admin'] == null) {header('Location:login_page.php'); }  ?>

<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "../koneksi.php";
	error_reporting(0);
?>

<?php 
	

	$queri = mysqli_query($conn, "UPDATE tbl_info_instansi SET 

		nama_instansi = '".$_POST['nama_instansi']."', alamat_instansi = '".$_POST['alamat_instansi']."',

		info_loket = '".$_POST['informasi_loket']."' WHERE id_data = 1

		");

	header('Location:index.php');

 ?>