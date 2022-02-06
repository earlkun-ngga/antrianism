<!DOCTYPE html>
<html>
<head>
	<title>Antrianism</title>
  
	<link rel="stylesheet" href="http://localhost/antrianism/node_module/boostrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="http://localhost/antrianism/node_module/style.css" >

</head>

	<?php
session_start();

if($_SESSION['user']['id_admin'] == null) {header('Location:login_page.php'); } 
if ($_SESSION['user']['status_akun'] == 'Belum Aktif'){header('Location:belum_aktif.php');} {
  # code...
}
 ?>

<body  data-spy="scroll" data-target="#navbarSupportedContent">


<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" id="brandnavbar"><b>Antrianism | ADMIN</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
     <li class="nav-item">
        <a class="nav-link" href="http://localhost/antrianism/admin_side/index.php">Layani Antrian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/antrianism/admin_side/manage_data_antrian/index.php">Data Antrian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/antrianism/admin_side/manage_informasi_instansi/index.php">Informasi Instansi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/antrianism/admin_side/buat_akun_admin/index.php">Buat akun admin lainnya</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/antrianism/admin_side/manage_profil/index.php">Profil Akun</a>
      </li>
    </ul>
 
    <div class="px-3 py-2"  style="width: 20%; height: 100%; background-color: white; border-radius: 9px;">
    <table>
    	<tr>
    		<td><img src="http://localhost/antrianism/node_module/assets/foto_profil/<?= $_SESSION['user']['file_foto_profil']; ?>" style="width: 100%;" class="img-thumbnail"></td>
    		<td class="pl-2"><?= $_SESSION['user']['username']; ?><br>
    		<b>ID : </b><?= $_SESSION['user']['id_admin']; ?>
    		<br><a href="http://localhost/antrianism/admin_side/proses_logout.php"><b>[x] Logout</b></a></td>
    	</tr>
    </table>
    
    
    
  

    </div>

  </div>
</nav>
