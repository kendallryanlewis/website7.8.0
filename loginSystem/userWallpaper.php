<?php
	session_start();
	include_once 'connect.php';
	$user = $_SESSION['valid_user'];

	/*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = 'Westminster2010';

    /*** database name ***/
    $mysql_dbname = 'Accounts';

    $con = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("Accounts", $con);

	$result = mysql_query("SELECT wallpaper FROM Users WHERE username='$user'");

	while($row = mysql_fetch_array($result))
	{
		echo $row['wallpaper'];	
	}	
	mysql_close($con);
?>
