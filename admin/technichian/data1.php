<?php
header('Content-Type: application/json');


require '../../include/db_conn.php';

$errors = array(); 



$sqlQuery1 = "SELECT AVG(a.rating) as average, b.place_name as place  
FROM feedback a join places b on a.Iplace_ID=b.Iplace_ID";

$result = mysqli_query($con,$sqlQuery1);
$data1 = array();
foreach ($result as $row) {
	$data1[] = $row;
}

mysqli_close($con);

echo json_encode($data1);
?>