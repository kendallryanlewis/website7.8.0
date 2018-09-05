<?php
/*** begin our session ***/
session_start();
include_once 'connect.php';
$user = $_SESSION['valid_user'];
$wallpaper = $_POST['resultImage'] ;

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
	session_start();
	
	$sql = "UPDATE Users SET wallpaper= '$wallpaper' WHERE username='$user'";
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
}?>


