<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "", "projetweb");

$sqlQuery = "SELECT idU,nomU,age FROM utilisateur ORDER BY idU";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>