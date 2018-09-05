<?php
	session_start();
if (!isset($_SESSION['valid_user'])) {
   $URL="../index.html";
	header("Location: $URL");
   exit();
}

?>