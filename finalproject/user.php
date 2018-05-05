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
        <a class="nav-link" href="index.html" style="font-size:1.5em;">Home</a>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminLogin.php" style="font-size:1.5em;">Administrate</a>
      </li>
         
    </ul>
  </div>  
</nav>

<div id="userMain"> 
      
      <div class="container form_div"> 
              <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Title:</label>
                <div class="col-7">
                  <input class="form-control" type="search" value="" id="example-search-input">
                </div>
              </div>
        
        

      
      
        <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Publisher:</label>
                
                <div class="col-7">
                        <select class="form-control" id="exampleSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                      </select>
                </div>
        </div>
      
      
      
      
      
      
          <div class="form-group row">
                <label for="example-search-input" class="col-2 col-form-label">Year:</label>
                
                <div class="col-7">
                        <select class="form-control" id="exampleSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                      </select>
                </div>
        </div>
      
        
        
        
        
      </div>



<br>


    <div id ="table">  
     
       <table class="table table-hover table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Title</th>
                      <th scope="col">Year Published</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><img id="bookImg" src="https://images-na.ssl-images-amazon.com/images/I/51i0IehrckL._AA300_.jpg"></th>
                      <td>Hacking: The Underground Guide </td>
                      <td>2017</td>
                      <td>$26.66</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Hacking: Computer Hacking</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td >Larry the Bird</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
        </table>

    </div> 

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
