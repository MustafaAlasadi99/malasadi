var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];



hint="!shown";
       
var selectedWord = "";
var selectedHint = ""; 
var board = [];
var remainingGuesses = 6;

var words = [{ word: "snake", hint: "It's a reptile"},
             { word: "monkey", hint: "It's a mammal"},
             { word: "beetle", hint: "It's a insect"}
    
                        ];


console.log(words[0]); 
            
            
window.onload=startGame();
            
            
            
function startGame(){
    pickWord();
    initBoard();
    showHintBtn();
    updateBoard();
    
    
    
    createLetters();
    
            
}

function initBoard(){
    //clean array
    
    for (var letter in selectedWord){
        
         board.push("_");
                             }

}

function pickWord (){

    var randomInt= Math.floor (Math.random()* words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words [randomInt].hint;

}   

function updateBoard(){

$("#word").empty();

 for (var i=0; i< board.length; i++){
    
    $("#word").append(board[i]+ " ");
}


/*for (var letter of board) {
    
    document.getElementById("word").innerHTML += letter + " ";
}*/



if(hint=="shown")
showHint();




}

function createLetters(){
    
    for (var letter of alphabet){
        
        $("#letters").append("<button class='letter btn btn-success' id='"+ letter +"'>" +letter + "</button>");  
    }    
    
    
    
}

/////////////

$(".letter"). click ( function(){
    
    checkLetter($(this).attr("id"));
    disabledButton($(this));
}
    );
    
    
    $(".hint"). click ( function(){
    
     $(".hint").remove();
     showHint();
     
    
     
     remainingGuesses = remainingGuesses-1;
    
    updateMan();
    
}
    );
    
    
    
    
    
    
    
$(".replayBtn"). on ( "click", function(){
    
    location.reload();
    
    
}
    
    );



function checkLetter(letter) {
    
    var positions= new Array();
    
    for (var i=0; i<selectedWord.length;i++){
        
        if(letter==selectedWord[i])
            positions.push(i);
            
    }
    
    
    
    if(positions.length>0){
        updateWord(positions,letter);
        
        if(!board.includes('_')) {
            endGame(true);
        }
        
        
    }
    
    else {
        
        remainingGuesses -=1;
        updateMan();
    }
    
    
    if(remainingGuesses <=0){
        
        endGame(false);
    }
    
}

function updateWord(positions, letter) {
    
    for (var pos of positions){
        
        board[pos]= letter;
    }
    
    updateBoard();
    
    
        
}


function updateMan(){
    
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png" );
    
    
    
    
    
}



function endGame(win) {
    
    $("#letters").hide();
    
    if (win){
        
        $('#won').show();
    }
    
    else {   $('#lost').show();    }
    
    
}

function disabledButton(btn){
    
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
    
}


function showHintBtn(){
   $("#word").empty();
   $("#hint").append("<button class='hint btn btn-success' > Show Hint </button>");

    
}

function showHint(){
    
    hint="shown";
    
    $("#word").append("<br/>");
$("#word").append("<span class='hint'>Hint: " + selectedHint + "</span>  ");
    
    
    
}

















      
        