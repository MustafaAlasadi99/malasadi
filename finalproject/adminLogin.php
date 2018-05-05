<?php include('functions.php');


if (isset($_POST['userName'])){
  echo $_POST['userName'];
 
  
  
  
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
  <a class="navbar-brand" href="#"></a>
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
<br>

       
       
       
       <div class="container">
         
      <h2>Administrator Login</h2>  <br/> <br/>
     
            <form method="POST" >
              <div class="form-group col-lg-4">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter Username" name="userName">
              </div>
              <div class="form-group col-lg-4">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
              </div>
               <br/>
              &nbsp; &nbsp; <button type="submit" class="btn btn-default">Login</button>
            </form>
      </div>


        <hr>
        <div id="footer">
            <footer>
                <br /><strong>CST336 Internet Programming.</strong><br />
                <strong></strong>
                <br /><img id="otter" src="img/otter.png" alt="CSUMB Logo" />
            </footer>
        </div>
</body>
</html>
