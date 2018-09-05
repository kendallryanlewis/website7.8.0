<?php
/*** begin our session ***/
/***sudo mount -o umask=000 /dev/sda /var/www/External***/
session_start();
include_once 'connect.php';
$target_dir = '/var/www/html/External/';
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$target_dir_image = 'External/';
$target_file_image = $target_dir_image . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$user = $_SESSION['valid_user'];

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
		if($row["password"]==$password){
			echo "The file ". basename( $_FILES["file"]["name"]). " has already been uploaded.";
			session_start();
			$sql = "UPDATE Users SET folder = '$target_file' , image_table = '$target_file_image' WHERE username='$user'";
			$result = mysql_query($sql);
			if($result)
			{
				echo 'SQL Complete';
				echo '<meta http-equiv="refresh" content="0; url =../homepage.php" />';
			}
			else
			{
				echo 'SQL Failure';
				echo '<meta http-equiv="refresh" content="0; url =../homepage.php" />';
			}
		}else{
			echo "Password Incorrect";
		}
	}
}
echo "The file ". basename( $_FILES["file"]["name"]). " has already been uploaded.";
			
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
					echo '<meta http-equiv="refresh" content="8; url =../homepage.php" />';
				}
				else
				{
					echo 'SQL Failure';
					echo '<meta http-equiv="refresh" content="8; url =../homepage.php" />';
				}
			}else{
				echo "Password Incorrect";
			}
		}
	}else {
        echo "Sorry, there was an error uploading your file.";
    }
}?>


