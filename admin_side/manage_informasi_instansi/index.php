
<?php include "../template/header.php"; ?>
<?php 
	include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php'; 
	include "../koneksi.php";
	error_reporting(0);
?>




 




<div class="container">


<div class="row mt-5">






<div class="col-12">
	<font size="+3">Manage Informasi Instansi </font>
	<hr>
</div>

	



</div>


<div class="row">

<div class="col-6 px-3 py-3">
<h4>Informasi Instansi</h4>
<hr>
<table class="table table-hover table-bordered">

	<?php 

		$queri1 = mysqli_query($conn, "SELECT * FROM tbl_info_instansi");

		while($data = mysqli_fetch_array($queri1)) { 

	 ?>
	<tr>
		<td><b>Nama Instansi</b></td>
		<td><?= $data['nama_instansi']; ?></td>
	</tr>
	<tr>
		<td><b>Informasi Loket</b></td>
		<td><?= $data['info_loket']; ?></td>
	</tr>
		<tr>
		<td><b>Alamat Instansi</b></td>
		<td><?= $data['alamat_instansi']; ?></td>
	</tr>

	<?php

	$ex_nama_instansi = $data['nama_instansi'];

	$ex_informasi_loket = $data['info_loket'];

	$ex_alamat_instansi = $data['alamat_instansi'];

	 } ?>
</table>

</div>

<div class="col-6 px-3 py-3">
<h4>Ubah Informasi Instansi</h4>
<hr>

	<form action="proses_edit_informasi_instansi.php" method="post">
	
	<h5>Nama Instansi</h5>
	<input type="text" name="nama_instansi" value="<?= $ex_nama_instansi; ?>" class="form-control mb-4" />

	<h5>Informasi Loket</h5>
	<input type="text" name="informasi_loket" value="<?= $ex_informasi_loket; ?>" class="form-control mb-4" />

	<h5>Alamat Instansi</h5>
	<textarea class="form-control mb-5" name="alamat_instansi"><?= $ex_alamat_instansi; ?></textarea>

	<input type="submit" value="Edit" class="btn btn-success">

	</form>

</div>


</div>



</div>




<?php include "../template/footer.php"; ?>




