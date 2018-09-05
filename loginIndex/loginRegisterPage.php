<?php
session_start();
header("Refresh:4; url=../homepage.php");
?>

<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Loading page</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/styleLoading.css">
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
		<section id="apresentation">
			<div id="title">
				<h1>
					<div id="typing"></div>
					<div class="dash"></div>
				</h1>
			</div>
			<a href="../homepage.php">Begin<span class="shift">›</span></a>
		</section>
    	 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/indexRegisterLoading.js"></script>
	</body>
</html>
