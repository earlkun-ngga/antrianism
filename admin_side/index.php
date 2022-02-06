

<?php include "template/header.php"; ?>
<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "koneksi.php";
	error_reporting(0);
?>


<?php 

	// $dbh = new DBhelper();

	// var_dump($dbh->getDataLimit5());


	// while($data = $dbh->getDataLimit5())
	// {
	// 	$data['id_admin'];
	// }


 ?>


 


  


<div class="container">

<div class="row mt-5">

<div class="col-lg-6 col-md-6 col-12 justify-content-center">
	
	<?php 

		$query1 = mysqli_query($conn, "SELECT * FROM tbl_antrian_live WHERE status_dilayani = 'belum' ORDER BY id_data ASC LIMIT 1");


		while($datasatuan = mysqli_fetch_array($query1))
			{
				$dsat = $datasatuan;
			}

	 ?>

	<div class="shadow-sm pt-5 pb-5 mx-auto" style="width: 400px; height: 400px; background-color: white;  border-radius: 10px; text-align: center; box-shadow: 5px 10px 20px 5px rgba(0, 0, 0, 0.1);">

		<h3 class="text-light"><b><font color="#123545">Antrian Sekarang ke - </font></b></h3>
		<br>

		<h1 class="text-light display-2"><b><font color="#123545"><?= $dsat['no_antrian']; ?></font></b></h1>
		<br>
		<hr style="background: white; width: 60%;">
		<a class="btn btn-success" href="proses_layani_antrian.php?id_data=<?= $dsat['id_data']; ?>">Selesai Layani </a> <button class="btn btn-danger" disabled>Tidak TerLayani</button>

	</div>


</div>

<div class="col-lg-6 col-md-6 col-12">
	



	<h2>5 Antrian Selanjutnya : </h2>
	<hr>
	<table class="table table-hover">

	<tr>
		<td><b>NO Antrian</b></td>
		<td><b>Waktu Buat</b></td>
		<td><b>Status Terlayani</b></td>
	</tr>
	
	<?php 

		$query2 = mysqli_query($conn, "SELECT * FROM tbl_antrian_live WHERE id_data > '".$dsat['id_data']."' AND status_dilayani = 'belum' ORDER BY id_data ASC LIMIT 5");

		while($data = mysqli_fetch_array($query2))
		{
	 ?>
	<tr>
		<td><?= $data['no_antrian']; ?></td>
		<td><?= $data['waktu_buat']; ?></td>
		<td>
		<?php 
			if($data['status_dilayani'] == 'belum') 
			{
			 echo "<div class='badge badge-danger'>belum</div>"; 
			}
			 else if($data['status_dilayani'] == 'sudah dilayani') 
			{
			  	echo "<div class='badge badge-success'>Sudah Dilayani</div>"; 
			} 
		?>
		</td>
	</tr>


	<?php } ?>


		
	</table>


</div>

</div>


<div class="row mt-5">
	
<div class="col-12 justify-content-center" >
		
<center>
<hr>
	<a href="index.php" class="mx-auto btn btn-primary">Update Data</a>
	<br>
	<i>Jika data kosong / tidak ada</i>
</center>
</div>

</div>


</div>




<?php include "template/footer.php"; ?>




