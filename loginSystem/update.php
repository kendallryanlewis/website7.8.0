<?php
/*** begin our session ***/
/***sudo mount -o umask=000 /dev/sda /var/www/External***/
session_start();
include_once 'connect.php';
$target_dir = '/var/www/External/';
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$target_dir_image = 'External/';
$target_file_image = $target_dir_image . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$user = $_SESSION['valid_user'];
/*** if we are here the data is valid and we can insert it into database ***/
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$username = $_POST['username'];
$email = $_POST['email'];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
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
	
	$result = mysql_query("SELECT password FROM Users WHERE username='$user'");
	
	while($row = mysql_fetch_array($result))
	{
		$pass = $row['password'];	
	}
	
    $sql = "SELECT * FROM Users WHERE password ='".$password."'";
    $mysql_call = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($mysql_call);
	
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		if (!$con)
		{
			die('Could not process your request. Error: ' . mysqli_error($con));
		}
		else
		{
			if($row["password"]==$password){
				echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
				session_start();
				$sql = "UPDATE Users SET folder = '$target_file' , image_table = '$target_file_image'   WHERE username='$user'";
				$result = mysql_query($sql);
				if($result)
				{
					echo 'SQL Complete';
					echo '<meta http-equiv="refresh" content="5; url =../homepage.php" />';
				}
				else
				{
					echo 'SQL Failure';
					echo '<meta http-equiv="refresh" content="5; url =../homepage.php" />';
				}
			}else{
				echo "Password Incorrect";
			}
		}
	}elseif ($username=false && move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		if (!$con)
		{
			die('Could not process your request. Error: ' . mysqli_error($con));
		}
		else
		{
			if($row["password"]==$password){
				echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
				session_start();
				$sql = "UPDATE Users SET email = $email, folder = '$target_file' , image_table = '$target_file_image'   WHERE username='$user'";
				$result = mysql_query($sql);
				if($result)
				{
					echo 'SQL Complete';
					echo '<meta http-equiv="refresh" content="5; url =../homepage.php" />';
				}
				else
				{
					echo 'SQL Failure';
					echo '<meta http-equiv="refresh" content="5; url =../homepage.php" />';
				}
			}else{
				echo "Password Incorrect";
			}
		}
	}else {
        echo "Sorry, there was an error uploading your file.";
    }
	
}?>


