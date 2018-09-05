<?php


/*** begin our session for validation ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['valid_user'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/

if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}

else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

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

    $sql = "SELECT * FROM Users WHERE username = '".$username."' and password ='".$password."'";
    $mysql_call = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($mysql_call);
	$_SESSION['valid_user'] = $username;

	if($row["username"]==$username && $row["password"]==$password){
		header("refresh:0; url=../homepage.php");
	}
	else
    		header("refresh:0; url=../homepage.php");
}?>

