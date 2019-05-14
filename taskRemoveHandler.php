<?php 

	$task = $_GET["taskName"];
	session_start();

	$hostname='localhost';
	$user = 'root';
	$password = '';
	$mysql_database = 'user';

	$db = mysqli_connect($hostname, $user, $password,$mysql_database);

	$username = $_SESSION["login_user"];
	$query = "DELETE FROM `tasks` WHERE username = '$username' and task = '$task'";
	echo($query);
	mysqli_query($db, $query);

 ?>