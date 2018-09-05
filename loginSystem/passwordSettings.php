<?php
/*** begin our session ***/
session_start();
include_once 'connect.php';
$user = $_SESSION['valid_user'];
$user_password = $_POST["user_password"];
$current_password = $_POST["current_password"];

/*** connect to database ***/
/*** mysql hostname ***/
$mysql_hostname = 'localhost';

/*** mysql username ***/
$mysql_username = 'root';

/*** mysql password ***/
$mysql_password = 'Westminster2010';

/*** database name ***/
$mysql_dbname = 'Accounts';

$con = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_dbname);


if (!$con)
{
  die('Could not process your request. Error: ' . mysqli_error($con));
}
else
{
	$sql = "SELECT email FROM Users WHERE username='$user'";
	$result = mysql_query($sql);

	if($result)
	{
		$pass = $row['password'];
	}

	echo $current_password;

	
	if($current_password == $pass){
		echo $current_password;
		session_start();
		$sql = "UPDATE Users SET password = '$user_password' WHERE username='$user'";

		$result = mysql_query($sql);
		if($result)
		{
			/*echo 'SQL Complete';*/
			echo '<meta http-equiv="refresh" content="0; url =../homepage.php" />';
		}
		else
		{
			/*echo 'SQL Failure';*/
			echo '<meta http-equiv="refresh" content="0; url =../homepage.php" />';
		}
	}else{
		echo "Password Incorrect";
	}
}?>


