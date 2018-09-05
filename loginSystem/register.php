<?php
/*** begin our session ***/
session_start();
include_once 'connect.php';

foreach($_POST as $key => $value)
{
	$$key = mysql_real_escape_string($value);
}

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
	include 'index.html';
}


if (empty($_POST['username'])) { 
	echo '<meta http-equiv="refresh" content="1; url =../index.html" />';
} 

if (empty($_POST['email'])) {
	echo '<meta http-equiv="refresh" content="1; url =../index.html" />';
} 

if (empty($_POST['user_password'])) {
	echo '<meta http-equiv="refresh" content="1; url =../index.html" />';
} 

if ($_POST['user_password'] != $_POST['confirm_user_pass']){
	echo '<meta http-equiv="refresh" content="1; url =../index.html" />';
} 

  
else
{
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
		$sql = "INSERT INTO Users(id, username, password, email, folder, image_table, wallpaper)
			VALUES('', '$username','$user_password', '$email', '/var/www/html/External/noImage.jpg', '/External/noImage.jpg', 'view/images/shadowAged.jpg')";
		$result = mysql_query($sql);
		$_SESSION['valid_user'] = $username;
		if($result)
		{
			echo '<meta http-equiv="refresh" content="1; url =../homepage.php" />';
		}else{
			echo '<meta http-equiv="refresh" content="1; url =../index.html" />';
		}
	}
}?>