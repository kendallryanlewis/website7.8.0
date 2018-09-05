<?php
$user = $_SESSION['valid_user'];
$messageOutput = $_POST["message-to-send"];
$myfile = fopen("chat.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $messageOutput);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

?>