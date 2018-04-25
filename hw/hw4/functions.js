






function validateForm() {
    var q1 = document.forms["myform"]["radio"].value;
     var div = document.getElementById('feedback');
     
     var q2 = document.forms["myform"]["radio2"].value;
     var div2 = document.getElementById('feedback2');
     
     var q3 = document.forms["myform"]["radio3"].value;
     var div3 = document.getElementById('feedback3');
     
     var q4 = document.forms["myform"]["text"].value;
     var div4 = document.getElementById('feedback4');
     
     var q5="not-empty"
     var div5 = document.getElementById('feedback5');
     
  
     
     
     
    if(!this.myform.check.checked   )
{
     if(!this.myform.check2.checked)
     {    
         if(!this.myform.check3.checked)
        {
        
             if(!this.myform.check4.checked)
                {
                    q5="";
                    //alert('');
                    //return false;
                }
        
        }
     }
    
}    
    
    
    
        



     
     
     
     
     
    if (q1 == ""  || q2==""  || q3=="" || q4=="" || q5=="" ) {
     
        
        if(q1==""){
            while(div.firstChild){
            div.removeChild(div.firstChild);
            }  document.getElementById("feedback").style.color="red";
            div.innerHTML = '------Missing Selection';
            
        }  else { while(div.firstChild){div.removeChild(div.firstChild);}  }
        
        
         if(q2==""){
            while(div2.firstChild){
            div2.removeChild(div2.firstChild);
            }  document.getElementById("feedback2").style.color="red";
            div2.innerHTML = '------Missing Selection';
            
        } else { while(div2.firstChild){div2.removeChild(div2.firstChild);}  }
        
     
     
      if(q3==""){
            while(div3.firstChild){
            div3.removeChild(div3.firstChild);
            }  document.getElementById("feedback3").style.color="red";
            div3.innerHTML = '------Missing Selection';
            
        } else { while(div3.firstChild){div3.removeChild(div3.firstChild);}  }
        
        
        if (q4==""){
             while(div4.firstChild){
            div4.removeChild(div4.firstChild);
            }
             document.getElementById("feedback4").style.color="red";
            div4.innerHTML = '------Missing Answer';
            
        } else { while(div4.firstChild){div4.removeChild(div4.firstChild);}  }
            
            
            
          if (q5==""){
             while(div5.firstChild){
            div5.removeChild(div5.firstChild);
            }  document.getElementById("feedback5").style.color="red";
            div5.innerHTML = '------Missing Selection';
            
        } else { while(div5.firstChild){div5.removeChild(div5.firstChild);}  }   
        
        
     
     
     
     
    }
    
    else {      //if all fields filled 
        var score=0;
        
        if (q1=="Radio2"){ score++;
            while(div.firstChild){ div.removeChild(div.firstChild);}
             document.getElementById("feedback").style.color="green";
            div.innerHTML = '------Correct';
            }
        else { while(div.firstChild){ div.removeChild(div.firstChild);}
        document.getElementById("feedback").style.color="red";
        div.innerHTML = '------Incorrect, the answer is b';
             
        }
        
        
          if (q2=="Radio4"){ score++;
            while(div2.firstChild){ div2.removeChild(div2.firstChild);}
            document.getElementById("feedback2").style.color="green";
            div2.innerHTML = '------Correct';
            }
        else {while(div2.firstChild){ div2.removeChild(div2.firstChild);}
        document.getElementById("feedback2").style.color="red";
        div2.innerHTML = '------Incorrect, the answer is d';
            
        }
        
        
            if (q3=="Radio1"){ score++;
            while(div3.firstChild){ div3.removeChild(div3.firstChild);}
            document.getElementById("feedback3").style.color="green";
            div3.innerHTML = '------Correct';
            }
        else {while(div3.firstChild){ div3.removeChild(div3.firstChild);}
        document.getElementById("feedback3").style.color="red";
        div3.innerHTML = '------Incorrect, the answer is a';
            
        }
        
        
        
         if (q4=="delete" || q4=="DELETE"){ score++;
            while(div4.firstChild){ div4.removeChild(div4.firstChild);}
            document.getElementById("feedback4").style.color="green";
            div4.innerHTML = '------Correct';
            }
        else {while(div4.firstChild){ div4.removeChild(div4.firstChild);}
        document.getElementById("feedback4").style.color="red";
        div4.innerHTML = '------Incorrect, the answer is DELETE';
            
        }
        
        
    
            
            if(this.myform.check.checked==true &&  this.myform.check3.checked==true && this.myform.check2.checked==false && this.myform.check4.checked==false    ){
        while(div5.firstChild){ div5.removeChild(div5.firstChild);}
        document.getElementById("feedback5").style.color="green";
        div5.innerHTML = '------Correct'; score ++;
            }
            
            else {
                 while(div5.firstChild){ div5.removeChild(div5.firstChild);}
                 document.getElementById("feedback5").style.color="red";
                 div5.innerHTML = '------Incorrect, the answer is a and c';
                
            }
        
        
        
        
        //display score
        var Score = document.getElementById('score');
        while(Score.firstChild){ Score.removeChild(Score.firstChild);} Score.innerHTML = "Score: " + score + "/5" ;
    }
    
    
   
   
   
    
    
    
    
    return false;
}



