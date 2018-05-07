<?php




include('../functions.php');

session_start();


if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}






//next query allows for SQL injection because of the single quotes
//$sql = "SELECT * FROM lab9_user WHERE username = '$username'";

$sql = "SELECT * FROM `bookInfo2` where pricePaid!=0 order by pricePaid limit 1";




$stmt = $conn->prepare($sql);
$stmt->execute( );
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);







echo json_encode($record);





?>