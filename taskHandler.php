<?php 

	$task = $_GET["taskName"];
	session_start();

	$hostname='localhost';
	$user = 'root';
	$password = '';
	$mysql_database = 'user';

	$db = mysqli_connect($hostname, $user, $password,$mysql_database);

	$username = $_SESSION["login_user"];

	// $query = "INSERT INTO `user`.`tasks` (`username`, `task`) VALUES ('"+$username+"', '"+$task+"');";
	

	$query = "INSERT into tasks (username,task,checked) values ('$username','$task', '0')";
	echo($query);
	mysqli_query($db, $query);

 ?>