<?php




include('../functions.php');

session_start();


if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}






$sql = "SELECT round(avg(pricePaid),2) FROM `bookInfo2` WHERE pricePaid!=0";




$stmt = $conn->prepare($sql);
$stmt->execute( );
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);







echo json_encode($record);





?>