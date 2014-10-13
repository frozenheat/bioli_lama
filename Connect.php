<?php
$mysql_host = "127.0.0.1";
$mysql_database = "newbioli";
$mysql_user = "root";
$mysql_password = "";

$con=mysqli_connect ($mysql_host, $mysql_user, $mysql_password, $mysql_database) or die ("Koneksi gagal" .mysql_error());
?>