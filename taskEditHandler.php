<?php 

	$task = $_GET["taskName"];
	$newtask=$_GET["newtask"];
	session_start();

	$hostname='localhost';
	$user = 'root';
	$password = '';
	$mysql_database = 'user';
	
	$db = mysqli_connect($hostname, $user, $password,$mysql_database);
	$username = $_SESSION["login_user"];
	$query = "UPDATE tasks SET task = '$newtask' WHERE username = '$username' and task = '$task'";
	mysqli_query($db, $query);

 ?>