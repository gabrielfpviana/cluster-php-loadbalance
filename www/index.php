<?php
echo $_SERVER['SERVER_ADDR'];
mysqli_connect("db", "root", "projeto") or die(mysqli_error());
echo "Connected to MySQL<br />";
?>