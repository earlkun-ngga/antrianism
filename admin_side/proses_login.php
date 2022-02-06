<?php include $_SERVER['DOCUMENT_ROOT'] . '/antrianism/node_module/helper/db_helper.php' ?>



<?php 
	
	
	$dbh = new DBhelper();

	$dataadmindb = $dbh->getDataAdminByUsername($_POST['username'], $_POST['password']);


	if($dataadmindb)
	{

		session_start();
		$_SESSION['user'] = $dataadmindb;
		header('Location:index.php');
	}

	else {


		echo "Login gagal !!!";
		header('Location:login_page.php');
	}

 ?>