
<?php include "../template/header.php"; ?>
<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "../koneksi.php";
	error_reporting(0);
?>




 




<div class="container">


<div class="row mt-5">






<div class="col-12">
	<font size="+3">Atur Profil Mu </font>
	<hr>
</div>




</div>

<div class="row mt3">

<div class="col-lg-6 col-12">

	<div class="card px-3 py-3" style="">
	<center><h3>ID CARD</h3></center>
	<hr>
	<table>
		<tr>
		<td width="40%" class="px-4"><img class="mb-2 img img-thumbnail" style="width: 250px;" src="http://localhost/antrianism/node_module/assets/foto_profil/<?= $_SESSION['user']['file_foto_profil']; ?>">
		<img class="mb-2 img img-thumbnail" style="width: 250px;" src="http://localhost/antrianism/node_module/assets/barcode_admin/default.gif">
		</td>



		<td width="60%">
		<b>ID Admin</b> : <?= $_SESSION['user']['id_admin']; ?>
		<hr>
		<b>Username </b> : <?= $_SESSION['user']['username']; ?> 
		<hr>
		<b>Nama Lengkap </b> :  <?= $_SESSION['user']['nama_lengkap']; ?>
		<hr>
		<b>Tanggal Buat </b> : <?= $_SESSION['user']['tanggal_buat']; ?>
		<hr> 
		<b>Status Akun </b> : <font color="white"> <?php if($_SESSION['user']['status_akun'] == 'Aktif')
			{
				echo "<a class='badge badge-success'>Aktif</a>";
			} else if($dataadmin['status_akun'] == 'Belum Aktif') {

				echo "<a class='badge badge-danger'>Belum Aktif</a>";
			} ?></font>
		<hr></td>
		</tr>
	</table>
	</div>

</div>


<div class="col-lg-6 col-12">
	<h4>Ganti Foto Profil</h4>
	<hr>

	<form action="proses_ganti_foto_profil.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file_foto" class="form-control" />
		<br>
		<b>
		<input style="color: white;" type="submit" value="Ganti"  class="btn btn-warning" />
		<hr>
		</b>
	</form>
	<br>
	<h4>Ubah Informasi</h4>
	<hr>

	<form action="proses_ganti_informasi.php" method="post">
		
		<h6>Username</h6>
		<input type="text" name="username" required value="<?= $_SESSION['user']['username']; ?>" class="form-control  mb-3" >
		<h6>Nama Lengkap</h6>
		<input type="text" name="nama_lengkap" required value="<?= $_SESSION['user']['nama_lengkap']; ?>" class="form-control mb-3" >
		<input type="submit" style="color: white;" value="Edit" class="btn btn-warning mb-3" />
		<hr>

	</form>

	<h4>Ubah Password</h4>
	<hr>

	<form action="proses_ganti_password.php" method="post">
		
		<h6>Password Baru</h6>
		<input type="password" name="pass1" required class="form-control  mb-3" >
		<h6>Re write password</h6>
		<input type="password" name="pass2" required class="form-control mb-3" >
		<input type="submit" style="color: white;" value="Edit" class="btn btn-warning mb-3" />
		<hr>

	</form>
</div>




</div>




<?php include "../template/footer.php"; ?>




