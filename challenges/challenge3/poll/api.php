<?php

include 'db.php';

$conn = getDatabaseConnection("c9");

$username = $_GET['username'];

//next query allows for SQL injection because of the single quotes
//$sql = "SELECT * FROM lab9_user WHERE username = '$username'";

$sql = "SELECT * FROM mytable where 1";


$stmt = $conn->prepare($sql);
$stmt->execute( );
$record = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($record);

echo json_encode($record);

?>