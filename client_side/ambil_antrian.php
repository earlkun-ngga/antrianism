<?php 
	include $_SERVER['DOCUMENT_ROOT']."/antrianism/node_module/helper/db_helper.php";
?>


<?php include 'template/header.php'; 

	$dbh = new DBHelper();


	
	$dataantrian = $dbh->getDataSatuan();
	$datainfoinstansi = $dbh->getDataInfoInstansi();

	date_default_timezone_set('Asia/Bangkok');



	?>


<header>	
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand " href="#" id="brandnavbar"><b>Setting</b></a>
	</nav>
</header>


<div class="container-fluid" id="about" style="background: #1aabef; height: 1000px;">

<div class="row" style="color: white; text-align: center;">

<div class="col-12 mt-3">

<h2><b>PT.<?= $datainfoinstansi['nama_instansi']; ?></b></h2>

</div>

<div class="col-12">

<h3><b>Lokasi Loket : 	<?= $datainfoinstansi['info_loket']; ?></b></h3>
<hr style="width: 60%; background-color: white;">

</div>

</div>


<div class="row">

<div class="mt-3 col-lg-6 col-12 mx-auto" style="">
	
<center>
<div class="shadow-sm pt-5 pb-5" style="width: 400px; height: 300px; background-color: #123545; border-radius: 10px;">

<h3 class="text-light"><b>Ambil Antrian ke -</b></h3>
<br>

<h1 class="text-light display-2"><b><?= $dataantrian['no_antrian']+1; ?></b></h1>

</div>


<a href="proses_tambah_antrian.php?antrianbaru=<?=$dataantrian['no_antrian']+1;?>" class="btn btn-primary mt-3" style="background-color: #123545;"><b>Ambil Antrian</b></a>
</center>


</div>


</div>

</div>





<?php include 'template/footer.php'; ?>