<?php 


	include "../koneksi.php";
	
	if($_GET['st'] == 'Aktif')
	{
		// echo "Akun dengan id : " . $_GET['id_admin'];
		// echo "<br>";
		// echo "Aktif";

		//Deaktif

		$queri1 = mysqli_query($conn, "UPDATE tbl_admin SET status_akun = 'Belum Aktif' WHERE id_admin = '".$_GET['id_admin']."' ");

		header('Location:index.php');


	} else if($_GET['st'] == 'Belum Aktif')
	{
		
		$queri1 = mysqli_query($conn, "UPDATE tbl_admin SET status_akun = 'Aktif' WHERE id_admin = '".$_GET['id_admin']."' ");

		header('Location:index.php');
	}
 ?>