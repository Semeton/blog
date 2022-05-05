<?php 
	session_start();

	// connect to database (procedural PHP)
	// $conn = mysqli_connect("localhost", "root", "", "blog");

	//create connection
	$conn = new mysqli("localhost", "root", "");
	
	if ($conn->connect_error) {
			die("Error connecting to database: " . mysqli_connect_error());
		}
	
	//select a specific database	
	$conn->select_db("Blog");	
	
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/blog/');
?>