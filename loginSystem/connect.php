<?php  // Connects to Our Database
	mysql_connect("localhost", "root", "Westminster2010")
	or die(mysql_error());
	mysql_select_db("Accounts") or die(mysql_error());
?>
