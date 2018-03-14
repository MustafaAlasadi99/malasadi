



<?php

$check=0;
$score=0;
$nameErr = "";
$radioErr = "";
$radioErr2 = "";
$radioErr3 = "";
$checkErr = "";
$box="" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["text"])) {
        $nameErr = "*ANSWER MISSING";
    }
   


     if (!isset($_POST["radio"])) {
        $radioErr = "*MISSING SELECTION";
    }
   

 if (!isset($_POST["radio2"])) {
        $radioErr2 = "*MISSING SELECTION";
    }


if (!isset($_POST["radio3"])) {
        $radioErr3 = "*MISSING SELECTION";
    }
    
    
    if (!isset($_POST["check"]) && !isset($_POST["check2"])  && !isset($_POST["check3"]) &&  !isset($_POST["check4"])       ) {
        $checkErr = "*MISSING SELECTION";
    }

  if (isset($_POST["check"]) || isset($_POST["check2"])  || isset($_POST["check3"]) ||  isset($_POST["check4"])       ) {
        $box="checked" ;
    }





if (isset($_POST["radio"]) &&   !empty($_POST["text"]) && isset($_POST["radio2"])  &&   isset($_POST["radio3"])  && $box=="checked")
{
        $check=1;
        
        
        
        
        
        
        
}



}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Hw 4 </title>
        
        
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
         
        <style>
        
                  
            @import url("css/styles.css");
             
            
        </style>
        
         <h3>SQL-QUIZ</h3>
         
         
    </head>
    
   
    
    <body>

       

        
        
        




       <div id="main">
        
        <?php
     
       
    

        ?>
        
        
            <form name="myform" method= "post"    >
                
                
                   
                    
                <div id="formData">    
                
                
                    <span id="question"> 1-Which of the following is not true about a FOREIGN KEY constraint?  </span> 
                    <?php  if ($check==1 &&  $_POST['radio']=="Radio2"){ echo  "       <span id='correct'> -------Correct </span>   " ; $score++; }?> <br>
                    &nbsp; <span class="error"><?php echo "$radioErr";?></span> 
                    
                    <?php  if ($check==1 &&  $_POST['radio']!="Radio2"){ echo  " <span id='incorrect'> -----Incorrect, the answer is: b </span>  " ;  }?>       <br>              
                    <input id="r1" type="radio" name="radio" value="Radio1" <?php if(isset($_POST['radio']) && $_POST['radio']=="Radio1"){echo "checked" ;}?> >
                    <label for="r1">a) It is a referential integrity constraint</label>  <br>
                    
                    <input id= "r2"type="radio" name="radio" value="Radio2" <?php if(isset($_POST['radio']) && $_POST['radio']=="Radio2"){echo "checked" ;}?> >
                    <label for="r2">b) A foreign key value cannot be null.</label>  <br>
                    
                    <input id= "r3" type="radio" name="radio" value="Radio3" <?php if(isset($_POST['radio']) && $_POST['radio']=="Radio3"){echo "checked" ;}?>>
                    <label for="r3">c) It establishes a relationship between a primary key or a unique key in the same table or a different table.</label>  <br>
                    
                    <input id= "r4" type="radio" name="radio" value="Radio4" <?php if(isset($_POST['radio']) && $_POST['radio']=="Radio4"){echo "checked" ;}?>>
                    <label for="r4">d) A foreign key value must match an existing value in the parent table.</label>  <br>
                   
                    <br>
                    
                     <span id="question">2-A transaction starts when </span>
                     <?php  if ($check==1 &&  $_POST['radio2']=="Radio4"){ echo  " <span id='correct'> -------Correct </span> " ; $score++;  }?>
                     
                     <br>
                    &nbsp; <span class="error"><?php echo "$radioErr2";?></span> 
                    
                    <?php  if ($check==1 &&  $_POST['radio2']!="Radio4"){ echo  "<span id='incorrect'> -----Incorrect, the answer is: d </span>" ;  }?>       <br>              
                    <input id="r5" type="radio" name="radio2" value="Radio1" <?php if(isset($_POST['radio2']) && $_POST['radio2']=="Radio1"){echo "checked" ;}?> >
                    <label for="r5">a) A COMMIT statement is issued</label>  <br>
                    
                    
                    <input id= "r6" type="radio" name="radio2" value="Radio2" <?php if(isset($_POST['radio2']) && $_POST['radio2']=="Radio2"){echo "checked" ;}?> >
                    <label for="r6">b) A ROLLBACK statement is issued</label>  <br>
                    
                    <input id= "r7" type="radio" name="radio2" value="Radio3" <?php if(isset($_POST['radio2']) && $_POST['radio2']=="Radio3"){echo "checked" ;}?>>
                    <label for="r7">c) A CREATE statement is used</label>  <br>
                    
                    
                    <input id="r8" type="radio" name="radio2" value="Radio4" <?php if(isset($_POST['radio2']) && $_POST['radio2']=="Radio4"){echo "checked" ;}?>>
                    <label for="r8">d) All of the above4</label>  <br>
                    
                    <br>
                    
                    
                    <span id="question"> 3-In which of the following cases a DML statement is executed? </span> 
                    <?php  if ($check==1 &&  $_POST['radio3']=="Radio1"){ echo  " <span id='correct'> -------Correct </span> " ; $score++;  }?>
                    <br>
                    &nbsp; <span class="error"><?php echo "$radioErr3";?></span> 
                    
                    <?php  if ($check==1 &&  $_POST['radio3']!="Radio1"){ echo  "<span id='incorrect'> -----Incorrect, the answer is: a </span>" ;  }?>       <br>              
                    <input id="r9" type="radio" name="radio3" value="Radio1" <?php if(isset($_POST['radio3']) && $_POST['radio3']=="Radio1"){echo "checked" ;}?> >
                    <label for="r9">a) When new rows are added to a table</label>  <br>
                    
                    
                    <input id="r10"type="radio" name="radio3" value="Radio2" <?php if(isset($_POST['radio3']) && $_POST['radio3']=="Radio2"){echo "checked" ;}?> >
                    <label for="r10">b) When a table is created</label>  <br>
                    
                    
                    <input id="r11" type="radio" name="radio3" value="Radio3" <?php if(isset($_POST['radio3']) && $_POST['radio3']=="Radio3"){echo "checked" ;}?>>
                    <label for="r11">c) When a transaction is committed</label>  <br>
                    
                    
                    <input id="r12" type="radio" name="radio3" value="Radio4" <?php if(isset($_POST['radio3']) && $_POST['radio3']=="Radio4"){echo "checked" ;}?>>
                    <label for="r12">d) None of the above</label>  <br>
                    
                    
                    
                    <br>
                    
                    
                    
                    <span id="question"> 4-Which SQL statement is used to delete data from a database? </span>
                    <?php  if ($check==1 &&  ($_POST['text']=="DELETE" ||  $_POST['text']=="delete")    ){ echo  " <span id='correct'> -------Correct </span> " ;  $score++; }?>
                    
                    <br>
                    <span class="error"><?php echo "$nameErr";?></span>  
                    
                    
                    <?php  if ($check==1 &&  $_POST['text']!="DELETE"  &&   $_POST['text']!="delete" ){ echo  "<span id='incorrect'> -----Incorrect, the answer is: delete </span>" ;  }?>   <br>
                
                   
                     <input type="text"   name="text" value= "<?php if(isset($_POST['text'])) echo $_POST['text']; ?>" />    
                    
                    <br> <br> <br>
                    
                    
                    
                    <span id="question"> 5-Which of the following is not true about SQL statements? (Select all that apply) </span>  
                       
                    
                    <?php  if ($check==1 && isset($_POST["check"]) && isset($_POST["check3"]) && (!isset($_POST["check2"]) && !isset($_POST["check4"]))  ){ echo  " <span id='correct'> ---Correct </span> " ;  $score++; }?> <br>
                    <span class="error"><?php echo "$checkErr";?></span>
                    
                    <?php  if ($check==1 && (!isset($_POST["check"]) || !isset($_POST["check3"])   || isset($_POST["check2"]) || isset($_POST["check4"]) ) ){ echo  "<span id='incorrect'> -----Incorrect, the answer is: a AND c </span>" ;  }?> <br>
                    
                     <input id="r13"type="checkbox" name="check" value="box1"  <?php if(isset($_POST['check']) && $_POST['check']=="box1"){echo "checked" ;}?>    > 
                     <label for="r13"  >a) Clauses must be written on separate lines</label>  <br>
                     
                     
                     <input id="r14" type="checkbox" name="check2" value="box2"  <?php if(isset($_POST['check2']) && $_POST['check2']=="box2"){echo "checked" ;}?>   > 
                     <label for="r14">b) SQL statements can be written on one or more lines.</label>  <br>
                     
                     
                     
                     
                     <input id="r15" type="checkbox" name="check3" value="box3"  <?php if(isset($_POST['check3']) && $_POST['check3']=="box3"){echo "checked" ;}?>   > 
                     <label for="r15">c) SQL statements are case sensitive.</label>  <br>
                     
                     
                     
                     <input id="r16" type="checkbox" name="check4" value="box4"  <?php if(isset($_POST['check4']) && $_POST['check4']=="box4"){echo "checked" ;}?>   > 
                     <label for="r16">d) Keywords cannot be split across lines.</label>  <br>
                    
                    
                    
                    
                </div>    
             
             
                     
                         <br> 
                         
                    <div id= "score">     
                     <?php  if ($check==1){ echo  "Score: " ; echo $score; echo "/5" ;   }?>
                    </div>
                    
                    
                        <br> 
                    
                    
                    
                    <div id="submitContainer">
                        <input id="submit" type="submit" value="Submit" name="submit" width="700px" />
                    </div>
                    
                    
            </form>
        
  
        
        
        <div/>
   
        
        


<br>






    </body>
    
    
    
    
    
</html>