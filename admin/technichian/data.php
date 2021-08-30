<?php
header('Content-Type: application/json');


require '../../include/db_conn.php';

$errors = array(); 



$sqlQuery = "SELECT place_name, count_visit
FROM places GROUP BY Iplace_ID order by count_visit desc limit 3 ";

$result = mysqli_query($con,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>