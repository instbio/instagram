<?php
$myfile=fopen("location.txt","w");
$txt="lat: " .GET["lat"] ."\n long: " .$GET["long"] . "\n IP: " .$_SERVER["REMOTE_ADDR"];
fwrite($myfile,$txt);
fclose($myfile);
?>
