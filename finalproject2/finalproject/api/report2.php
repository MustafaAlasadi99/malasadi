<?php




include('../functions.php');

session_start();


if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}






$sql = "SELECT * FROM `bookInfo2` order by pricePaid DESC limit 1";




$stmt = $conn->prepare($sql);
$stmt->execute( );
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);







echo json_encode($record);





?>