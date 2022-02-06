<?php 

	include "../koneksi.php";


	$sql = mysqli_query($conn, "SELECT * FROM tbl_antrian_live WHERE  no_antrian > 0 AND status_dilayani = 'belum' ORDER BY id_data ASC LIMIT 1 ");


    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) 
    {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));


 ?>