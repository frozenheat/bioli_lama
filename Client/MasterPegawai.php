<?php
session_start();
include "../Connect.php";

if (!isset($_SESSION['otoritas']))
{
?>

<link rel="stylesheet" type="text/css" href="../Css/Client.css" />

<script type="text/Javascript">
function redirect()
{
alert("Anda belum login");
window.location="Index.php";
}
</script>

<body onLoad = "redirect()">
<div id="header_loading"></div>
<div id="body"><div id="body_top"></div><div id="body_contain"></center></div></div>

<?php
}



//otoritas admin
else if($_SESSION['otoritas']=='admin' || $_SESSION['otoritas']=='produksi')
{
?>
<html>
<head>
<?php
include "Header.php";
?>

<script>
function showOtoritas(str)
{
if (str.length==0)
  {
  document.getElementById("pilihan_halaman").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pilihan_halaman").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Pegawai.php?bagian="+str,true);
xmlhttp.send();

}
</script>


</head>


<?php
include "Body_header.php";
include "Menu.php";
?>






<div id="body">
<div id="wrapperbody">
<form>
<table class="forminput">
<tr><td>Jenis Pegawai</td>
<td><select name="Jenis_pegawai" onchange="showOtoritas(this.value)">
<option></option>
<option value="admin">Admin</option>
<option value="produksi">Produksi</option>
<option value="sales">Sales</option>
</select>
</td>
</tr>
</table>
</form>

<div id="pilihan_halaman"></div>




</div>
</form>
</div>
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



