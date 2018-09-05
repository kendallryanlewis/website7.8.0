
<?php
	session_start();
	include_once 'connect.php';
	$user = $_SESSION['valid_user'];

	/*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = 'Westminster2010';

    /*** database name ***/
    $mysql_dbname = 'Accounts';

    $con = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("Accounts", $con);

	$result = mysql_query("SELECT * FROM Users");

echo "<table border='1'>
<tr>
<th>Username</th>
<th>password</th>
<th>email</th>
<th>image_table</th>
<th>folder</th>
<th>background</th>
<th>wallpaer</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['image_table'] . "</td>";
  echo "<td>" . $row['folder'] . "</td>";
  echo "<td>" . $row['background'] . "</td>";
  echo "<td>" . $row['wallpaper'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
