<?php
function open(){
$host="localhost";
$username="root";
$password="";
$db_name="blogapp";


    $db= new mysqli($host, $username, $password, $db_name);
    if(!$db){
    	die("disconnected" .mysql_error());
    }
    return ($db);
}
 ?>
