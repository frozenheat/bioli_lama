<?php
session_start();
if (!isset($_SESSION['otoritas']))
{
?>


<script type="text/Javascript">

function redirect()
{
alert("Anda belum login");
window.location="Index.php";

}

</script>






<body onLoad = "redirect()">

<?php
}
else if(isset($_SESSION['otoritas']))
{
?>
<html>
<head>
<?php
include "Header.php";
?>
</head>

<?php
include "Body_header.php";
include "Menu.php";
?>





<div id="body">







</div>








<?php
include "Footer.php";
}
else 
{
?>

<?php
include "Otoritas_gagal.php";
}
?>



