

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "Sessioncheck.php";

if (isset($_SESSION['otoritas']))
{




echo "<script type='text/Javascript'>";

echo "function redirect()";
echo "{";

echo "window.location = 'Halaman_Utama.php';";

echo "}";


echo "</script>";
echo "<link rel='stylesheet' type='text/css' href='../Css/Client.css' />";

echo "<body onLoad=\"setTimeout('redirect()',5000)\" >";


echo "<div id='header_loading'></div>";




echo "<div id='body'><div id='body_contain' style=\"padding-top:155px;\"><center><img src='../Image/loader.gif'></center></div></div>";


}




