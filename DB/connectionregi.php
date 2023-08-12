<?php
//error_reporting(0);
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'login';

	$conn = mysqli_connect('localhost','root','','login');
	
    if(mysqli_connect_errno()){
        die('Database connection failed' .mysqli_connect_error());
    }else{
        echo "Connection Successful...";
    }
?>