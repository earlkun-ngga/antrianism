<?php 
	



	class DBHelper {



		//koneksi
	function connection()
	{
		return mysqli_connect('localhost', 'root', '', 'db_antrianism');
	}
	
	
	//data antrian
	function getDataSatuan()
	{
		$conn = $this->connection();
		$query = mysqli_query($conn, "SELECT * FROM tbl_antrian_live ORDER BY id_data DESC LIMIT 1");
		$output = mysqli_fetch_array($query);
		return $output;
	}



	function getDataLimit5()
	{

		$conn = $this->connection();
		$query = mysqli_query($conn, "SELECT * FROM tbl_admin");
		$output = mysqli_fetch_array($query);
		return $output;


	}

	function tambahAntrian($calonantrian)
	{

		date_default_timezone_set('Asia/Bangkok');
		$conn = $this->connection();
		$tgl = Date('d - M - Y H:i:s');
		mysqli_query($conn, "INSERT INTO tbl_antrian_live (no_antrian, waktu_buat, status_dilayani) VALUES('".$calonantrian."', '".$tgl."', 'belum') ");
	}






	// data info instansi

	function getDataInfoInstansi()
	{

		$conn = $this->connection();

		$query = mysqli_query($conn, "SELECT * FROM tbl_info_instansi WHERE id_data = '1' ");

		$datainfo = mysqli_fetch_array($query);


		return $datainfo;

	}




	//akun admin


	function getDataAdminByUsername($username, $password)

	{

		$conn = $this->connection();
		$query = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password = '".$password."' ");
		$datauser = mysqli_fetch_array($query);
		return $datauser;

	}



	}
	


 ?>