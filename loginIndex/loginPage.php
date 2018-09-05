<?php
session_start();
header("Refresh:4; url=../homepage.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Loading page</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/styleLoading.css">
	</head>
	<body background = "../<?php include '../loginSystem/userWallpaper.php';?>">
		<section id="apresentation">
			<div id="title">
				<h1>
					<div id="typing"></div>
					<div class="dash"></div>
				</h1>
			</div>
		</section>
    	 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/indexLoading.js"></script>
	</body>
</html>

