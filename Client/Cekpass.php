<?php
session_start();

include "../Connect.php";



$user = $_POST['user'];

$query = mysqli_query($con,"select password, otoritas, nama_pegawai from pegawai where nip = '".$user."'");
$reader = mysqli_fetch_array($query);



$password=$reader[0];
$otoritas= $reader[1];
$nama_pegawai= $reader[2];



if ($password==$_POST['password'])
{
	
	//$Id_pegawai= substr($Id,0,3);
	//echo "".$Id_pegawai;
	
	$_SESSION['otoritas']=$otoritas;
	$_SESSION['nip']=$user;
	$_SESSION['nama_pegawai']=$nama_pegawai;
	
	header("Location: LogClient.php");
	exit();
	
	
}
else
{?>

<html>
<head>
<title>Bioli Lestari</title>
<script type="text/Javascript">

function redirect()
{

alert("Anda salah memasukan username atau password");
window.location = "Index.php";

}

</script>


<link rel="stylesheet" type="text/css" href="../Css/Client.css" />
</head>


<body onLoad = "redirect()">
<div id="header_loading"></div>
<div id="body"><div id="body_top"></div><div id="body_contain"></center></div></div>
</body>
</html>


<?php
//include "Footer.php";
//while ($array=$rs->fetchrow())
//{print_r($array);}
}
?>



