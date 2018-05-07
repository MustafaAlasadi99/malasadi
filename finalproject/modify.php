<?php include('functions.php');




session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}

if(isset( $_GET['bookid']))
{
  
  global $conn;
  
  $sql = "DELETE FROM bookInfo2 WHERE bookId =  " . $_GET['bookid'];
 $statement = $conn->prepare($sql);
 $statement->execute();
  
  echo"<script>  alert('Book Deletetion was successful');   </script>";
  
  
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
  
  
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
  
   <script>
            
            function confirmDelete() {
                
                return confirm("Are you sure you want to delete it?");
                
                
                
            }
            
        </script>
  
</head>


<body>



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
        <a class="nav-link" href="index.php" style="font-size:1.5em;">Logout</a>  
      </li>
     
         
    </ul>
  </div>  
</nav>

<div id="userMain"> 
      
  <div class="container form_div"> 
  
    <form name"myform"  >   
     
              <div class="form-group row">
                <label for="title" class="col-2 col-form-label">Title:</label>
                <div class="col-7">
                  <input class="form-control" name="text" type="text" id="title">
                </div>
              </div>
        
        

      
      
        <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Publisher:</label>
                
                <div class="col-7">
                        <select class="form-control" id="example-search-input" name="publisher">
                              <option value="">Select One </option>
                              <?=displayPublishers()?>
                              
                              
                      </select>
                </div>
        </div>
      
      
      
      
      
      
          <div class="form-group row">
                <label for="year" class="col-2 col-form-label">Year:</label>
                
                <div class="col-7">
                        <select class="form-control" id="year" name="year">
                              <option value="">Select One </option>
                              <?=displayYears()?>
                            
                      </select>
                </div>
          </div>
      
        
           <div class="form-group row">
                <label for="category" class="col-2 col-form-label">Category:</label>
                
                <div class="col-7">
                        <select class="form-control" id="category" name="category">
                              <option value="">Select One </option>
                              <?=displayCategories()?>
                            
                      </select>
                </div>
          </div>
        
      
      
      
      

            <div id="buttonContainer"> 
              <button type="submit" class="btn btn-primary" value="set" name="submitBtn">Search</button>
            </div>

    </form>
    
    
    
    </div>
    
     </div> 
    
    
    
    
    
<br>

 <!-- <h2>Welcome &nbsp; <?php //echo $_SESSION['adminName'] ?></h2> -->
 
    
    
    

    
    
    <?php displayBooks(); ?>
    
    
    
    
    
    
    
    

        <hr>
        <div id="footer">
            <footer>
                <br /><strong>CST336 Internet Programming.</strong><br />
                <strong></strong>
                <br /><img id="otter" src="img/otter.png" alt="CSUMB Logo"  />
            </footer>
        </div>
        
        
        <script src="js/functions.js"></script>
        
        
        
        
      
        
        
        
        
</body>
</html>
