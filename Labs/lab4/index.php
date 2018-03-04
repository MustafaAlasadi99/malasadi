 <?php 
        
            $backgroundImage= "img/sea.jpg";
            
            if (isset($_GET['keyword']))  {
                include 'api/pixabayAPI.php';
                $keyword = $_GET['keyword'];
                $imageURLs = getImageURLs($keyword)       ; 
                $backgroundImage = $imageURLs[array_rand($imageURLs)];
                
                
            }
        
        ?>



<!DOCTYPE html>
<html>
    
    
    
    <head>
        <meta charset="utf-8">
        <title> Lab4 </title>
        
        
        
       
        
        
        <style>
        
         
          @import url("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
         
            @import url("css/styles.css");
            
            
            body{
                
                background-image: url('<?=$backgroundImage ?>') 
                
            }
            
            #carousel-example-generic{
                width: 500px;
                
                margin: 0 auto;
                
            }
            
        </style>
        
       
       
    </head>
    
    
    
    
    
    
    <body>
        
       
        
        <br> 
        
         <?php 
            
            if (!isset($imageURLs)){
                echo "<h2> Type a Keyword to display a slideshow <br /> with random images from pixabay.com </h2>";
                
            } 
        
              
                
    
        ?>
        
        
        
     <form>
        <input type="text" name="keyword" placeholder="keyword" value="<?=$_GET['keyword']?>"/>
        <input type="radio" id = "lhorizontal" name = "layout" value = "horizontal">
        <label for = "Horizontal"> </label>
        <label for="lhorizontal"> Horizontal </label>
        <input type = "radio" id = "lvertical" name = "layout" value = "vertical"> 
        <label for = "Vertical"></label><label for="lvertical"> Vertical </label>
        
        <select name = "category">
            <option value ="">Select One</option> 
            <option value="ocean">Sea</option>
            <option>Forest</option> 
            <option>Mountain</option>
            <option>Snow</option> 
        </select>
        
        <input type="submit" value="Search"/> 



    </form>
        
        
        <?php
        
         if (isset($_GET['keyword']))  {
             
         
        
        
        ?>
        

     
        
        <div id= "carousel-example-generic" class="carousel slide" data-ride="carousel">   <!––  spelling error with class ––>
            <!--indicators -->
            <ol class="carousel-indicators">                                                <!––  look at loop ––>
                <?php
                for($i=0;$i<7;$i++)
                {
                    echo "<li data-target='#carousel-example-generic' data-slide-to='$i'       ";
                    
                    
                    //echo ($i==0) ? "class='active'" : "";
                    
                    if ($i==0){
                        
                        echo "class='active'";
                    }
                    
                    echo "></li>";
                    
                    
                }
                
                ?>
                
                
            </ol>
            
            
            <!--image wrapper -->
            <div class="carousel-inner" role="listbox">
                <?php
                    for($i=0;$i<7;$i++){
                        do {
                            $randomIndex= rand (0, count ($imageURLs));
                        }
                        while (!isset($imageURLs[$randomIndex]));
                        
                        echo '<div class= "item '; 
                        
                    //    echo ($i==0) ? "active" : "";
                    
                    if ($i==0) {
                        echo "&nbsp;"; echo "active";
                        
                    }
                    
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '"  >' ;
                        echo '</div>';
                        unset ($imageURLs[$randomIndex]);
                        
                        
                    }
                
                
                
                
                
                
                
                ?>
            </div>
            
            
            
            
            <!--controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">   <!––  spelling error with class ––>
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
        </a>
        
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        
        
        </div>
        
        
        

    
    <?php
         } //end if
    
    ?>
        
    

            <br>
            


            
            


            
        
        

   


        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         
         
    </body>
    
    
    
</html>