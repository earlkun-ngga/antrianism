<?php 
	


	include "../koneksi.php";
	session_start();

	echo $_FILES['file_foto']['type'];

	$extType = explode('/', $_FILES['file_foto']['type']);
	echo "<br>";
	$extTypeRes =  reset($extType);


	if($extTypeRes != 'image' || $_FILES['file_foto']['size'] > 10000000)
	{
		
		header('Location:http://localhost/antrianism/admin_side/false_site/error_upload_foto.php');

	}else {





		$nama_file_baru = 'use_' . substr(md5(rand()), 0, 9) . '_' . $_SESSION['user']['id_admin'] . '_'.'fp.png';


		move_uploaded_file($_FILES['file_foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/assets/foto_profil/'.$nama_file_baru);


		$queri = mysqli_query($conn, "UPDATE tbl_admin SET file_foto_profil = '".$nama_file_baru."' WHERE id_admin = '".$_SESSION['user']['id_admin']."' ");

		unlink($_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/assets/foto_profil/'.$_SESSION['user']['file_foto_profil']);

		$_SESSION['user']['file_foto_profil'] = $nama_file_baru;

		header('Location:index.php');
		

	}


	


 ?>