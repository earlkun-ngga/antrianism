<?php 
	include $_SERVER['DOCUMENT_ROOT']."/antrianism/node_module/helper/db_helper.php";
?>


<?php include "template/header.php"; ?>
<?php include "koneksi.php"; ?>

<?php 

	$queriinfoinstansi = mysqli_query($conn, "SELECT * FROM tbl_info_instansi WHERE id_data = '1' ");

	while($datainstansi = mysqli_fetch_array($queriinfoinstansi))
	{
		$nama_instansi = $datainstansi['nama_instansi'];
		$lokasi_loket = $datainstansi['info_loket'];
		$alamat_instansi = $datainstansi['alamat_instansi'];
	}

	

 ?>


<header>	
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand " href="#" id="brandnavbar"><b><?= $nama_instansi; ?></b></a>
	</nav>
</header>


<div class="container-fluid" id="about" style="background: #1aabef; height: 1000px;">

<div class="row" style="color: white; text-align: center;">

<div class="col-12 mt-3">

<h2></b></h2>

</div>

<div class="col-12">

<h3></b></h3>

</div>

</div>


<div class="row">

<div class="mt-3 col-lg-6 col-12 " style="">
	
<center>
<div class="shadow-sm pt-5 pb-5" style="width: 100%; height: 3	00px; background-color: #123545; border-radius: 10px;">

<h3 class="text-light"><b>Silahkan Ke Loket : <?= $lokasi_loket; ?> , Untuk Antrian ke </b></h3>
<br>

<h1 class="text-light display-2"><b id="antrian_sekarang"></b></h1>
<br>

<font color="white" size="+2"><i>Jika tidak ada, maka akan di lanjut ke antrian selanjutnya</i></font>
</div>



</center>


</div>


<div class="col-lg-6 col-12 mt-3 pl-5">

<font color="white"><h3>Antrian Selanjutnya : </h3></font>

<table style="color: white;" class="table table-hover" id="tabel_data_antrian">
	
	<tr>
		<td><b>NO Antrian</b></td>
		<td><b>Waktu</b></td>
	</tr>
	


</table>
 

</div>


</div>

</div>


<script>
	
	var antrian_sebelumnya;

		$(document).ready(function() {
	    selesai();
	});
	 
	function selesai() {
		setTimeout(function() {
			update();
			selesai();
			getdata();
		}, 200);
	}
	 
	function update() {
		$.getJSON("api_lokal/data_satuan.php", function(data) {

			$.each(data.result, function() {
				document.getElementById(`antrian_sekarang`).innerHTML = this['no_antrian'];

				antrian_sebelumnya = this['no_antrian'];
			});


		});
	}


	function getdata()
	{
		

		$.getJSON(`api_lokal/data_antrian_selanjutnya.php?antrian_sebelumnya=${antrian_sebelumnya}`, function(data) {

				
		if(data.result.length >= 5) {

		 document.getElementById(`tabel_data_antrian`).innerHTML = `
		 <tr><td><b>NO Antrian</td><td>Waktu Antri</td></tr>

		<tr><td>${data.result[0].no_antrian}</td><td>${data.result[0].waktu_buat}</td></tr>
		<tr><td>${data.result[1].no_antrian}</td><td>${data.result[1].waktu_buat}</td></tr>
		<tr><td>${data.result[2].no_antrian}</td><td>${data.result[2].waktu_buat}</td></tr>
		<tr><td>${data.result[3].no_antrian}</td><td>${data.result[3].waktu_buat}</td></tr>
		<tr><td>${data.result[4].no_antrian}</td><td>${data.result[4].waktu_buat}</td></tr>


		 `;

		} else if(data.result.length >= 4) 
		{

			 document.getElementById(`tabel_data_antrian`).innerHTML = `
		 <tr><td><b>NO Antrian</td><td>Waktu Antri</td></tr>

		<tr><td>${data.result[0].no_antrian}</td><td>${data.result[0].waktu_buat}</td></tr>
		<tr><td>${data.result[1].no_antrian}</td><td>${data.result[1].waktu_buat}</td></tr>
		<tr><td>${data.result[2].no_antrian}</td><td>${data.result[2].waktu_buat}</td></tr>
		<tr><td>${data.result[3].no_antrian}</td><td>${data.result[3].waktu_buat}</td></tr>
	


		 `;

		}

		else if(data.result.length >= 3) 
		{

			 document.getElementById(`tabel_data_antrian`).innerHTML = `
		 <tr><td><b>NO Antrian</td><td>Waktu Antri</td></tr>

		<tr><td>${data.result[0].no_antrian}</td><td>${data.result[0].waktu_buat}</td></tr>
		<tr><td>${data.result[1].no_antrian}</td><td>${data.result[1].waktu_buat}</td></tr>
		<tr><td>${data.result[2].no_antrian}</td><td>${data.result[2].waktu_buat}</td></tr>
	
	


		 `;

		}else if(data.result.length >= 2) 
		{

			 document.getElementById(`tabel_data_antrian`).innerHTML = `
		 <tr><td><b>NO Antrian</td><td>Waktu Antri</td></tr>

		<tr><td>${data.result[0].no_antrian}</td><td>${data.result[0].waktu_buat}</td></tr>
		<tr><td>${data.result[1].no_antrian}</td><td>${data.result[1].waktu_buat}</td></tr>



		 `;

		} else if(data.result.length >= 1) 
		{

			 document.getElementById(`tabel_data_antrian`).innerHTML = `
		 <tr><td><b>NO Antrian</td><td>Waktu Antri</td></tr>

		<tr><td>${data.result[0].no_antrian}</td><td>${data.result[0].waktu_buat}</td></tr>

	


		 `;

		}
		else if(data.result.length >= 0) 
		{

			 document.getElementById(`tabel_data_antrian`).innerHTML = `
		 <tr><td><b>NO Antrian</td><td>Waktu Antri</td></tr>

		<tr><td></td><td></td></tr>

	


		 `;

		}


		

		});
	
	}




	// function iniNo23()
	// {
	// document.getElementById(`antrian_sekarang`).innerHTML = "23";
	// }

	// function iniNo25()
	// {
	// 	document.getElementById(`antrian_sekarang`).innerHTML = "25";
	// }

</script>


<?php include 'template/footer.php'; ?>