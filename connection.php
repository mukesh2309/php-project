<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'hitech_project';

//creating a connection 

$con = mysqli_connect($server,$username,$password,$db);

//checking via if statement

// if($con){
// 	echo "connection sucessfull";
// }
// else{
// 	echo "no connection";
// }

?>