<?php 

$conn = mysqli_connect('localhost', 'root', '', 'music');

if(!$conn){
    echo "Database connection failed";
}
