
<?php include "../template/header.php"; ?>
<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "../koneksi.php";
	error_reporting(0);
?>




 




<div class="container">


<div class="row mt-5">






<div class="col-12">
	<font size="+3">Buat Akun Admin Lainnya  </font>
	<hr>
</div>

	



</div>


<div class="row">

<div class="col-6 px-3 py-3" >
<h4>Akun Admin yang Terdaftar</h4>
<p><i>Untuk mengganti status keaktifan akun, klik status nya</i></p>
<hr>
<div style="height: 400px; overflow-y: scroll;">
<table class="table table-hover table-bordered">

	<tr>
		<td><b>ID Admin</b></td>
		<td><b>Username</b></td>
		<td><b>Status Akun</b></td>
	</tr>

	<?php 

		$queriadmin = mysqli_query($conn, "SELECT * FROM tbl_admin");
		while($dataadmin = mysqli_fetch_array($queriadmin))
		{ ?>


	<tr>
		<td><?= $dataadmin['id_admin']; ?></td>
		<td><?= $dataadmin['username']; ?></td>
		<td>
		<?php 

			if($dataadmin['status_akun'] == 'Aktif')
			{
				echo "<a href='proses_ganti_status.php?id_admin=".$dataadmin['id_admin']."&st=".$dataadmin['status_akun']."'  class='badge badge-success'>Aktif</a>";
			} else if($dataadmin['status_akun'] == 'Belum Aktif') {

				echo "<a href='proses_ganti_status.php?id_admin=".$dataadmin['id_admin']."&st=".$dataadmin['status_akun']."'  class='badge badge-danger'>Belum Aktif</a>";
			}

		 ?>
			



		</td>
	</tr>
	
	<?php  } ?>

		
		
</table>
</div>
</div>

<div class="col-6 px-3 py-3">
<h4>Input Data Akun Admin</h4>
<hr>

	<form action="proses_daftar_admin.php" method="post">
	
	<table border="0">
		<tr>
			<td colspan="2" class="pr-2">
				<h5>Nama Lengkap</h5>
				<input type="text" required name="nama_lengkap" style="width: 500px;"  class="form-control mb-4" />
			</td>
		</tr>
		<tr>
			<td colspan="2" class="pr-2">
				<h5>Username </h5>
				<input type="text" required name="username" placeholder="semisalnya : ujang32" class="form-control mb-4" />
			</td>
		</tr>
		<tr>
			<td class="pr-2">
				<h5>Password</h5>
				<input type="password" required name="password1"  class="form-control mb-4" />
			</td>
			<td class="pr-2">
				<h5>Tulis Ulang Password</h5>
				<input type="password" required name="password2"  class="form-control mb-4" />
			</td>
		</tr>



	</table>

	

	

	<input type="submit" value="Daftar" class="btn btn-success">

	</form>

</div>


</div>



</div>




<?php include "../template/footer.php"; ?>




