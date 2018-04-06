<?php
include 'functions.php';


?>



<!DOCTYPE html>
<html>
    <head>
        
        <style>
            body{
                margin:0 auto;
                text-align:center;
            }
        </style>
        
        
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        
        <title>Movie Catalog</title>
        
    </head>
    
    <body>

            <!-- Search Form -->
            <form>
                
                Product: <input type="text" name="product"  /        >      <br>
                Category: 
                <Select name="category">
                    <option value="">Select One </option>
                    <?=displayCategories()?>
                </Select>                           <br> <br>
                
                Format: 
                <Select name="format">
                    <option value="">Select One </option>
                    <?=displayFormats()?>
                </Select>                           <br> <br>
                
                Rating: 
                <Select name="rating">
                    <option value="">Select One </option>
                    <?=displayRatings()?>
                </Select>                           <br> <br>
                
                
            Sort Results by Name: <br/>
            
            <input type="radio" name="sort" value="asc" /> ASC <br>
            <input type="radio" name="sort" value="desc" /> DESC  <br>
                
                
                
                
                
                
            
                
            <input type="submit" value="Search" name="searchForm" id="submit"/>
            
            </form>



             <!-- Display Search Results -->
            <?php
                displayResults();
            
            ?>





      



    </body>
</html>