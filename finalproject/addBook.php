<?php include('functions.php');




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
  
  
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
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
        <a class="nav-link" href="index.php" style="font-size:1.5em;">Logout</a>  
      </li>
     
         
    </ul>
  </div>  
</nav>


    
    
    
    
    
<br>

 <!-- <h2>Welcome &nbsp; <?php //echo $_SESSION['adminName'] ?></h2> -->
 
    
    
    
      <div class="container form_div2"> 
  
    <form name"myform"  >   
     
              <div class="form-group row">
                <label for="title" class="col-3 col-form-label">Title:</label>
                <div class="col-7">
                  <input class="form-control" name="title" type="text" id="title">
                </div>
              </div>
        
           <div class="form-group row">
                <label for="authorName" class="col-3 col-form-label">Author Name:</label>
                <div class="col-7">
                   <input class="form-control" name="authorName" type="text" id="authorName">
                </div>
              </div>

           <div class="form-group row">
                <label for="authorInfo" class="col-3 col-form-label">Author Information:</label>
                <div class="col-7">
                     <textarea class="form-control" id="authorInfo" rows="3" name="authorInfo"></textarea>
                </div>
              </div>
  
        
        
            <div class="form-group row">
                <label for="authorName" class="col-3 col-form-label">Publisher:</label>
                <div class="col-7">
                   <input class="form-control" name="publisher" type="text" id="publisher">
                </div>
              </div>
        
           <div class="form-group row">
                <label for="category" class="col-3 col-form-label">Category:</label>
                
                <div class="col-7">
                        <select class="form-control" id="category" name="category">
                              <option value="">Select One </option>
                              <?=displayCategories()?>
                            
                      </select>
                </div>
          </div>
        
      
      
      
      

            <div id="buttonContainer"> 
              <button type="submit" class="btn btn-primary" value="set" name="submitBtn">Add to collection</button>
            </div>

    </form>
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    

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
