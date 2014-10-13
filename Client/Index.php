<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include "Header.php";
?>
<script src="../Javascript/js-image-slider.js" type="text/Javascript"></script>
<style type="text/css">
.bodylogintop{
padding-top:80px;
}
</style>
</head>
<body>
<?php
include "Body_header.php";
?>

<div class="bodylogintop">
</div>
<div id="body">

<div id="body_login">
<div id="left_login">

<div id="slider">
	
	<img src="../Image/slide/slide1.jpg">


	<img src="../Image/slide/slide2.jpg">
	
	
	<img src="../Image/slide/slide3.jpg">
	
</div>

</div>
<div id="right_login">

<form name="formlogin" method="post" action="Cekpass.php">

<div id="logintop"></div>

<table width="250" border="0"  cellspacing="-" cellpadding="-">

<tr><td width="50">User Id</td></tr>
<tr><td><input name="user" class="login-inp" type="text"></td></tr>
<tr><td width="50">password</td></tr>
<tr><td><input name="password" class="login-inp" type="password"></td></tr>
<tr align="center"><td colspan="3"><input name="tombollogin" type="submit" class="submit-login"></td></tr>
</table>
</div>
</form>


</div>
</div>

<?php
include "Footer.php";
?>