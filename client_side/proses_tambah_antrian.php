
<?php 
	include $_SERVER['DOCUMENT_ROOT']."/antrianism/node_module/helper/db_helper.php";
?>


<?php 

	$antrianbaru = $_GET['antrianbaru'];

	$dbh = new DBHelper();


	//identifikasi nilai sebelumnya
	$nilaisebelumnya = $dbh->getDataSatuan();
	echo $nilaisebelumnya['no_antrian'];


	if($nilaisebelumnya['no_antrian'] == 0 && $antrianbaru != 1)
	{
			
			header('Location:ambil_antrian.php');


	}else {
		


	$dbh->tambahAntrian($antrianbaru);

	

	header('Location:ambil_antrian.php');



	}


 ?>

