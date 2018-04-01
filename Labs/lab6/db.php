<?php


function getDatabaseConnection($dbName) {

$host = "localhost";
$dbname = $dbName;
$username = "root";
$password = "elmaestro0";

//checks whether the URL contains "herokuapp" (using Heroku)
if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
   $url = parse_url(getenv("b1462255794105:1a71dff1@us-cdbr-iron-east-05.cleardb.net/heroku_5b5b35991ee9557?reconnect=true"));
   $host = $url["host"];
   $dbname = substr($url["path"], 1);
   $username = $url["b1462255794105"];
   $password = $url["1a71dff1"];
}

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

return $dbConn;

}



?>