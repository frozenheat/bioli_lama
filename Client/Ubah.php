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

<?php
}



//otoritas admin
else if(isset($_SESSION['otoritas']) && $_SESSION['last_page_visited']=="MasterBarang.php")
{
if($_SESSION['otoritas']=='admin' || $_SESSION['otoritas']=='produksi')
{
?>
<html>
<head>
<?php
include "Header.php";
?>

<script type="text/Javascript">

//document.getElementByName("jumlah_barang".value=<?php echo $_GET['jenis'];?>);

</script>

</head>

<?php
include "Body_header.php";
include "Menu.php";
//echo $_GET['jenis'];
 //$nama = $_GET['nama'];
 //echo "".$nama;
//$id_barang = $_GET['id'];
//echo "".$id_barang;
?>




<div id="body">
<div id="wrapperbody">
<form name="formubahbarang" method="post" action="EditMaster.php">



<table class="forminput" border="0"  cellspacing="-" cellpadding="-">

<tr><td width="500">Id_barang</td><td><input name="id_barang" type="text" value=<?php echo $_POST['txtId'];?> required disabled><input type="hidden" name="id" value=<?php echo $_POST['txtId'];?>></td></tr>

<tr><td width="500">Nama barang</td><td><input name="nama_barang" id="nama_barang" type="text" class="kotaktext" value=<?php echo $_POST['txtNama'];?> required></td></tr>

<tr><td width="500">Jenis barang</td><td><select name="jenis_barang"  required>

<?php
//memasukan jenis barang dari database kedalam combobox
echo "<option value='".$_POST['txtJenis']."'>".$_POST['txtJenis']."</option>";

$query= mysqli_query($con,"select jenis_barang from jenis_barang");

while ($reader = mysqli_fetch_array($query))
{
if ($reader[0]!=$_POST['txtJenis'])
{
echo "<option value='".$reader[0]."'>".$reader[0]."</option>";
}
}
?>
</select>
</td>

<tr><td width="500">Jumlah stock barang</td><td><input name="jumlah_barang" type="text" value=<?php echo $_POST['txtJumlah'];?> required></td></tr>

<tr><td width="500">Lot size barang</td><td><input name="lot" id="lot" type="text" class="kotaktext" value=<?php echo $_POST['txtLot'];?> required></td></tr>

<tr><td width="500">Lama produksi barang</td><td><input name="lama" id="lama" type="text" class="kotaktext" value=<?php echo $_POST['txtLama'];?> required></td></tr>

<input type="hidden" name="ubah" value="barang">

<tr align="center" ><td colspan="3" style="padding-top:10px"><input name="tombolinputbarang" type="submit" class="tombolUbah"></td></tr>
</table>
</form>



</div>

</div>










<?php
include "Footer.php";


}
}

else
{
?>

<?php
include "Otoritas_gagal.php";
}
?>



