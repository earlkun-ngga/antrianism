<?php 

	include "../koneksi.php";

	$nilaisebelum = $_GET['antrian_sebelumnya'];

	$nilaitambah = $nilaisebelum;


	$sql = mysqli_query($conn, "SELECT * FROM tbl_antrian_live WHERE  no_antrian > '".$nilaitambah."' AND status_dilayani = 'belum' ORDER BY id_data ASC LIMIT 5 ");


    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) 
    {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));


 ?>