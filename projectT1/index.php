<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial ; background-color: grey;}

body {
    margin:0
}
#main{
    
    text-align:center;
    
    font-size:2em;
    
    color:white;
}
#menuBackground {
    background:#2f3036;
    width:100%;
    height:50px;
    text-align: center;
}
#menuContainer {
    text-align: center;
}
/*Strip the ul of padding and list styling*/
ul {
    list-style-type:none;
    margin:0;
    padding:0;
}

/*Create a horizontal list with spacing*/
li {
    display:inline-block;
    vertical-align: top;
    margin-right:1px;
}

/*Style for menu links*/
li a {
    display:block;
    min-width:140px;
    height:50px;
    text-align:center;
    line-height:50px;
    font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
    color:#fff;
    background:#2f3036;
    text-decoration:none;
    font-size: 1rem;
}

/*Hover state for top level links*/
li:hover a {
    background:#19c589
}

/*Style for dropdown links*/
li:hover ul a {
    background:#f3f3f3;
    color:#2f3036;
    height:40px;
    line-height:40px
}

/*Hover state for dropdown links*/
li:hover ul a:hover {
    background:#19c589;
    color:#fff
}

/*Hide dropdown links until they are needed*/
li ul {
    position: absolute;
    display:none
}

/*Make dropdown links vertical*/
li ul li {
    display:block;
}

/*Prevent text wrapping*/
li ul li a {
    width:auto;
    min-width:100px;
    padding:0 20px
}

/*Display the dropdown on hover*/
ul li a:hover + .hidden,.hidden:hover {
    display:block
}

/*Style 'show menu' label button and hide it by default*/
.show-menu {
    font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
    text-decoration:none;
    color:#fff;
    background:#19c589;
    text-align:center;
    padding:16px 0;
    display:none;
    width:100%!important
}

/*Hide checkbox*/
input[type=checkbox] {
    display:none
}

/*Show menu when invisible checkbox is checked*/
input[type=checkbox]:checked ~ #menu {
    display:block;
    margin:0 auto
}

/*Responsive Styles*/
@media screen and (max-width : 1440px) {
    /*Make dropdown links appear inline*/
    #menuContainer{
        font-size:2em;
        
    }
    
    ul {
        position:static;
        display:none;
        white-space: initial;
    }
    
    /*Create vertical spacing*/
    li {
        margin-bottom:1px
    }
    
    /*Make all menu links full width*/
    ul li,li a {
        width:100%
    }
    
    /*Display 'show menu' link*/
    .show-menu {
        display:block
    }
}

</style>
</head>
<body>

<div id="menuBackground">
    <div id="menuContainer">
        <label for="show-menu" class="show-menu">Show Menu</label>
        <input type="checkbox" id="show-menu" role="button" />
        <ul id="menu">
            <li><a href="#">Home</a>
            </li>
            <li>
                <a href="#">About ￬</a>
                <ul class="hidden">
                    <li><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio ￬</a>
                <ul class="hidden">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </li>
            
            <li><a href="#">Contact</a>
            </li>
        </ul>
    </div>
</div>
    
    <br> <br> <br>
    
    <Div id="main">
        BASBAG.TK
        
    </Div>



</body>
</html>
