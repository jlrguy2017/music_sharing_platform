<?php 

session_start();

$run = session_destroy();

if($run){
    echo "<script type='text/javascript'>";
    echo "alert('User Logged out Successfully');";
    echo "window.location.href = 'index.php';";
    echo "</script>";
}