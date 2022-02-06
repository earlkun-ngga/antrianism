<?php 

session_start();

if($_SESSION['user']['id_admin'] == null) {header('Location:login_page.php'); }  

	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "../koneksi.php";
		
		


		if ($_POST['password1'] != $_POST['password2']) {
			
			header('Location:http://localhost/antrianism/admin_side/false_site/jika_password_daftar_tidak_sama.php');
		} 
		else {


			date_default_timezone_set('Asia/Bangkok');
			$waktu = Date('d - M - Y H:i:s');
			$status_akun = 'Belum Aktif';
			$file_foto_default = 'default.png';


			$query = mysqli_query($conn, "INSERT INTO tbl_admin (username, nama_lengkap, password, tanggal_buat, file_foto_profil, status_akun)
				VALUES ('".$_POST['username']."', '".$_POST['nama_lengkap']."', '".$_POST['password1']."', '".$waktu."', '".$file_foto_default."', '".$status_akun."')");

			header('Location:index.php');




		}


	?>