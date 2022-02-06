<?php 

	
	include "../koneksi.php";
	session_start();


	//validasi
	if($_POST['pass1'] == $_POST['pass2'])

	{


	$queri = mysqli_query($conn, "UPDATE tbl_admin SET password = '".$_POST['pass1']."' WHERE id_admin = '".$_SESSION['user']['id_admin']."' ");


	header('Location:index.php');
 
	} else { 

		header('Location:http://localhost/antrianism/admin_side/false_site/jika_password_tidak_sama_ganti.php');

	}

 ?>