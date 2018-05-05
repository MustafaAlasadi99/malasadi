<?php

include 'db.php';

$conn=getDatabaseConnection("fp");




//functions


function displayPublishers(){
    
global $conn;

$sql="SELECT DISTINCT publisher FROM `bookInfo2` order by publisher ";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo "<option value='".$record["publisher"]."'>" . $record["publisher"] . "</option> " ; 
    
}


}



function displayYears(){
    
global $conn;

$sql="SELECT DISTINCT yearPublished FROM `bookInfo2`  ";

$stmt=$conn->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    echo "<option value='".$record["yearPublished"]."'>" . $record["yearPublished"] . "</option> " ; 
    
}


}




function displayBooks(){

if ($_SERVER["REQUEST_METHOD"] == "GET") {


if  (  $_GET['submitBtn']=="set"  ){
  
  //echo "button pressed";
  //echo "<br>";
  
  global $conn;
  
  $namedParameters= array();
  
  $sql= "select * from bookInfo2 where 1";
  
  
  
  if  (  !empty($_GET['year'])  ){
  //echo "year set";
  //echo "<br>";
  
  
     $sql.=  " and yearPublished= :yearPublished" ;
     $namedParameters[":yearPublished"]=  $_GET['year'] ;
  
  
  }
  
 
  
 if  (  !empty($_GET['publisher'])  ){
      //echo "publisher set";
      
     $sql.=  " and publisher= :publisher" ;
     $namedParameters[":publisher"]=  $_GET['publisher'] ;
      
      
  }
  
  
  
  
                $stmt=$conn->prepare($sql);
                $stmt->execute($namedParameters);
                $records=$stmt->fetchAll(PDO::FETCH_ASSOC);
  
  echo "<div id ='table'>";  
     
      echo " <table class='table table-hover table-light'>";
                    echo"<thead>";
                 echo"<tr>";
                   echo"<th scope='col'>Image</th>";
                   echo"<th scope='col'>Title</th>";
                   echo"<th scope='col'>Year Published</th>";
                   echo"<th scope='col'>Price</th>";
                 echo"</tr>";
                        echo"</thead>";
                  
              echo"<tbody>";
                   
                   
               foreach($records as $record){
    
                 echo "
                      <tr>
                      <th scope='row'> <img id='bookImg' src='" . $record['img']  .  "'  /> </th>
                      <td>". $record['bookTitle'] ."</td>
                      <td>". $record['yearPublished'] ."</td>
                      <td>$". $record['pricePaid'] ."</td>
                      </tr>
                      
                      "  ;
    
            }
                   
                
                    
                    
              echo"</tbody>";
                  
        echo"</table>";

    echo"</div>"; 
  
  
  
}



}

}






?>