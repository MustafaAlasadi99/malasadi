<?php include('functions.php');





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
        <a class="nav-link" href="index.php" style="font-size:1.5em;">Home</a>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminLogin.php" style="font-size:1.5em;">Administrate</a>
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
                
               <span> <label for="example-search-input" class="col-2 col-form-label">Publisher:</label> </span>
                <div class="col-7">
                  
                        <select class="form-control" id="example-search-input" name="publisher">
                              <option value=""             >Select One </option>
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
          
          
          
            <div class="form-group row">
                <label for="sort" class="col-2 col-form-label">Sort By:</label>
                
                <div class="col-7">
                        <select class="form-control" id="sort" name="sort">
                              <option value="">Select One </option>
                              <option value="asc" >Title A-Z </option>
                              <option value="desc">Title Z-A </option>
                            
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
