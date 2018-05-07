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
    
    if ($record["publisher"]!="")
    echo "<option value='".$record["publisher"]."'  ";  if($_GET['publisher']==$record["publisher"] )echo"selected";     echo "  >" . $record["publisher"] . "</option> "   ;    
    
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
    
    if ($record["yearPublished"]!="0")
   // echo "<option value='".$record["yearPublished"]."'>" . $record["yearPublished"] . "</option> " ; 
    echo "<option value='".$record["yearPublished"]."'  ";  if($_GET['year']==$record["yearPublished"] )echo"selected";     echo "  >" . $record["yearPublished"] . "</option> "   ; 
}


}


function displayCategories(){
    
    global $conn;

$sql2="SELECT *  FROM `book_category2`";

$stmt=$conn->prepare($sql2);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($records);

foreach($records as $record){
    
    if ($record["catName"]!="")
    //echo "<option value='".$record["catId"]."'>" . $record["catName"] . "</option> " ; 
    echo "<option value='".$record["catId"]."'  ";  if($_GET['category']==$record["catId"] )echo"selected";     echo "  >" . $record["catName"] . "</option> "   ;  
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
  
  
  
    if(!empty($_GET['text'])){
              $sql.=  " and bookTitle LIKE :bookTitle" ;
            $namedParameters[":bookTitle"]= "%" . $_GET['text'] . "%";
                
    }
  
  
  
  
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
  
  if  (  !empty($_GET['category'])  ){
      //echo "publisher set";
      
     $sql.=  " and catId= :catId" ;
     $namedParameters[":catId"]=  $_GET['category'] ;
      
      
  }
  
  
  ////////////////////////////////////
   if  (  ($_GET['sort'])=="asc"  ){
      
      $sql.=  "   order by bookTitle" ;
     
  }
  
   if  (  ($_GET['sort'])=="desc"  ){
      
      $sql.=  "   order by bookTitle DESC" ;
     
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
                   echo"<th scope='col'></th>";
                   echo"<th scope='col'></th>";
                 echo"</tr>";
                        echo"</thead>";
                  
              echo"<tbody>";
                   
                   
     
     
    
     
             foreach($records as $record){   
    
                 echo "
                      <tr>
                      <th scope='row'> <img id='bookImg' src='" . $record['img']  .  "'  /> </th>
                      <td>". $record['bookTitle'] ."</td>              ";
                      
                      echo "<td>"; if ($record['yearPublished']=="0"){echo ""; } else { echo $record['yearPublished'];}    echo "</td>";
                      
                      
                      
                      echo "<td>"; if ($record['pricePaid']=="0"){echo ""; } else {echo"$"; echo $record['pricePaid'];}    echo "</td>";
                     
                     
                     if(isset( $_SESSION['adminName']))
                            {
                             echo"  <td>    <a href='edit.php?id=".$record['bookId']."      ' class='btn btn-secondary'>Edit</a>   </td>   ";
                             
                               echo"<td>";
                               
                                echo "<form name='deleteForm'  onsubmit='return confirmDelete()'>";
                                echo "<input type='hidden' name='bookid' value= " . $record['bookId'] . " />";
                                
                                
                                
                                echo " <button type='submit' class='btn btn-danger'>Remove</button>   " ; 
                                
                                
                                
                                
                                echo "</form>";
                                echo"</td>";
                             
                            }
                     
                     
              echo " </tr>";
                      
                     
                      
            }
     
     
                
     
     
     
     
     
     
                   
                
                    
                    
              echo"</tbody>";
                  
        echo"</table>";

    echo"</div>"; 
  
  
  
}



}

}  //end




 









?>