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
if ($_SESSION['user']['status_akun'] == 'Aktif'){header('Location:index.php');}  ?>

<body  data-spy="scroll" data-target="#navbarSupportedContent">


<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" id="brandnavbar"><b>Antrianism | ADMIN</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  



  </div>
</nav>



  <div class="container">

  <div class="row mt-5">

    <div class="col-12">
    <center>
    <h2>Maaf Akun anda belum aktif</h2>
    <br>
    Untuk melakukan aktivasi silahkan hubungi admin yang sudah terdaftar
    <br>
    <br>
    <div class="card px-3 py-3" style="width: 40%;">
    <h4>Informasi Akun</h4>
    <hr>
    ID Admin : <?= $_SESSION['user']['id_admin']; ?><br>
    Username : <?= $_SESSION['user']['username']; ?>
    </div>
    <br>
    <a href="proses_logout.php" class="btn btn-success">Baik</a>
    <br>
    </center>
    </div>

  </div>

  </div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>