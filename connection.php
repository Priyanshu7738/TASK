<?php

$host="localhost";
$username="root";
$password="";
$db="task_db";

$conn=mysqli_connect($host, $username, $password, $db);

if(!$conn){
    echo mysqli_connect_error();
}






?>