<?php
include "Sessioncheck.php";

include "../Connect.php";

if ($_SESSION['last_page_visited']="Ubah.php" && $_POST['ubah']=="barang")
{
if ($_SESSION['otoritas']=="admin" || $_SESSION['otoritas']=="produksi")
{
//$id_barang=$_POST['id'];
//$nama_barang=$_POST['nama_barang'];
//$jenis_barang=$_POST['jenis_barang'];
//$jumlah_barang=$_POST['jumlah_barang'];

//echo $id_barang;
//echo $nama_barang;
//echo $jenis_barang;
//echo $jumlah_barang;
$query=mysqli_query($con,"update barang set nama_barang='".$_POST['nama_barang']."', jenis_barang='".$_POST['jenis_barang']."', jumlah_stock='".$_POST['jumlah_barang']."', lot_size='".$_POST['lot']."', lama_waktu_produksi='".$_POST['lama']."'  where id_barang='".$_POST['id']."'");

?>

<script type="text/javascript" language="javascript">
function redirect()
{
	alert("data barang berhasil dirubah")
	window.location="MasterBarang.php";
}


</script>

<body onload="redirect()">
<?php
}
}
?>