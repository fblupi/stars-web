<?php

include_once "dbConnection.php";

$name = $_GET['name'];
$distance = $_GET['distance'];

$conn = dbConnect();
$sql = "INSERT INTO star (name, distance) VALUES ('$name', '$distance')";
mysqli_query($conn, $sql);

mysqli_close($conn);

header('location: ../../index.php');

?>