<?php


function Connect()
{
 $dbhost = "egytronica.com";
 $dbuser = "egytroni_admin";
 $dbpass = "egytronica_2017";
 $dbname = "egytroni_egytronica_db";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}



?>