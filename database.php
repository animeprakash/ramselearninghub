<?php
	$db_host = 'localhost:3306';
	$db_user = 'root';
	$db_password = '';
	$db_database = 'ramselearning';
	$con = mysqli_connect($db_host, $db_user, $db_password, $db_database);
	if (mysqli_connect_errno())
	{
	die('Could not connect: ' . mysqli_error($con));
	}
?> 

