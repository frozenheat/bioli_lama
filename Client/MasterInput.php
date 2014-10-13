<?php
session_start();

//script untuk inputan barang
if ($_SESSION['last_page_visited']=="MasterBarang.php")
{
if ($_SESSION['otoritas']=="admin" || $_SESSION['otoritas']=="produksi")
{
include "../Connect.php";

//$jumlah_id = $con->Execute("SELECT count(Id_barang) FROM barang where jenis_barang='".$_POST['jenis_barang']."'");


$query=mysqli_query($con,"select nama_barang from barang where Nama_barang='".$_POST['nama_barang']."'");
$reader=mysqli_fetch_array($query);
if(!isset($reader[0]))
{




//echo "<script>";
//echo "alert('input berhasil');";
//echo "</script>";



//auto generate id//
//$query=mysqli_query($con,"SELECT count(id_barang) FROM barang where jenis_barang='".$_POST['jenis_barang']."'");
//$reader=mysqli_fetch_array($query);


//$jumlah_barang =(string)$reader[0];
//$jumlah_barang = $reader[0];
//$jumlah_barang=$jumlah_barang+1;
//echo $jumlah_barang;




$query=mysqli_query($con,"SELECT id_jenis_barang FROM jenis_barang where jenis_barang='".$_POST['jenis_barang']."'");
$reader=mysqli_fetch_array($query);
$id_jenis_barang = $reader[0];

include "./Randomnumber.php";


$id_barang =$id_jenis_barang . $acak;
//auto generate id end


$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];

$jumlah_barang = $_POST['jumlah_barang'];
$lot = $_POST['lot'];
$waktu_produksi = $_POST['waktu_produksi'];

//echo $id_barang;
//echo $nama_barang;
//echo $jenis_barang;
//echo $lama_produksi;


$query = mysqli_query($con,"insert into barang values('".$id_barang."','".$nama_barang."','".$jenis_barang."','".$lot."','".$jumlah_barang."','".$waktu_produksi."')");
//mysqli_fetch_array($query)


	//alert("input berhasil");
	//header("Location: MasterBarang.php");
	//exit('input berhasil');
?>

<script type="text/Javascript">

function redirect()
{
alert("input berhasil")
window.location = "MasterBarang.php";

}


</script>
<link rel="stylesheet" type="text/css" href="../Css/Client.css" />


<body onLoad="setTimeout('redirect()',0)" >


<?php	
}
else
{
?>




<script type="text/Javascript">

function redirect()
{
alert("nama_barang telah ada")
window.location = "MasterBarang.php";

}


</script>

<body onLoad="setTimeout('redirect()',0)" >






<?php
}
mysqli_close($con);
}
}
//akhir dari input barang



//input bagian master pegawai
if ($_SESSION['otoritas']=="admin"  && $_SESSION['last_page_visited']=="MasterPegawai.php")
{
include "../Connect.php";


if ($_POST['otoritas']=="admin")
{
$query=mysqli_query($con,"select id_otoritas from otoritas_pegawai where nama_otoritas='".$_POST['otoritas']."'");
$reader=mysqli_fetch_array($query);
$id_otoritas = $reader[0];

include "./Randomnumber.php";


$nip_pegawai=$id_otoritas.$acak;
//echo $id_pegawai;
$query=mysqli_query($con,"insert into pegawai values('".$nip_pegawai."', '".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['jenis_kelamin']."','".$_POST['alamat_email']."', '".$_POST['otoritas']."', '".$_POST['password']."') ");
}
mysqli_close($con);
?>

<script type="text/Javascript">
function redirect()
{
alert("input berhasil")
window.location = "MasterPegawai.php";
}
</script>

<body onload="setTimeout('redirect()',0)">
<?php
}
//akhir dari input master pegawai
?>