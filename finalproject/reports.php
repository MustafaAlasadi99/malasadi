<?php 

include('functions.php');




session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>


<body id="adminBody">



<nav class="navbar navbar-expand-md bg-danger navbar-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin.php" style="font-size:1.5em;">Home</a>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addBook.php" style="font-size:1.5em;">Insert</a>  
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="modify.php" style="font-size:1.5em;">Modify</a>  
      </li>
      
    
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="font-size:1.5em;">Logout</a>  
      </li>
     
         
    </ul>
  </div>  
</nav>


   <br> <br> <br> <br>
    <div id="reportMain"> 

    <button type="button" class="btn btn-primary" id="bt">Least Expensive Book</button>
    
    <button type="button" class="btn btn-primary" id="bt2">Most Expensive Book</button>
    
    <button type="button" class="btn btn-primary" id="bt3">Average Book Price</button>
    
    
   <br> <br> <br>
    
    
    
    <div id="report"> </div>
   
    
    
    
    
    </div>
    
    
    
    

        <hr>
        <div id="footer">
            <footer>
                <br /><strong>CST336 Internet Programming.</strong><br />
                <strong></strong>
                <br /><img id="otter" src="img/otter.png" alt="CSUMB Logo"  />
            </footer>
        </div>
        
        
      
        
           <script > 
            $(document).ready(function(){
     
                     	$("#bt").click(function(){
                     	    
                    //alert("The button was clicked.");
                    
                    
                      $.ajax({


          
                    type: "GET",
                    url: "api/report.php",
                    dataType: "json",
                    data: { "": ""},
                    success: function(data,status) {
                       //alert(data.breed);
                       //log.console(data.pictureURL);
                       
                         $("#report").html(  data.bookTitle );
                         
                         
          
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                    
                });//ajax
                    
                    
                    
                    
                    
                    
                });//button
                
                
                
                
                     	$("#bt2").click(function(){
                     	    
                    //alert("The button2 was clicked.");
                    
                    
                      $.ajax({


          
                    type: "GET",
                    url: "api/report2.php",
                    dataType: "json",
                    data: { "": ""},
                    success: function(data,status) {
                       //alert(data.breed);
                       //log.console(data.pictureURL);
                       $("#report").html("");
                         $("#report").html(data.bookTitle);
                         
                         
          
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                    
                });//ajax
                    
                    
                    
                    
                    
                    
                });//button2
                
                
                
                 
                     	$("#bt3").click(function(){
                     	    
                    
                    
                    
                      $.ajax({


          
                    type: "GET",
                    url: "api/report3.php",
                    dataType: "json",
                    data: { "": ""},
                    success: function(data,status) {
                       //alert(data.breed);
                       //log.console(data.pictureURL);
                       $("#report").html("");
                       // $("#report").html(data["avg(pricePaid)"]);
                       
                       
                       var avg = data["round(avg(pricePaid),2)"];
                       
                      // avg=avg.toFixed(2);
                       
                      
                          
                         $("#report").html("$" + avg);
                         
                      
          
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                    
                });//ajax
                    
                    
                    
                    
                    
                    
                });//button3  
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                   
     
                 //document.write("<h2>asdasda</h2>");
     
                 }); //document ready   
             </script>
             
        <script src="js/functions.js"></script>
</body>
</html>
