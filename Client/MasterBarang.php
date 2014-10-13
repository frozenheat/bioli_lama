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



//otoritas pegawai
else if($_SESSION['otoritas']=='admin' || $_SESSION['otoritas']=='produksi')
{
if(!isset($_GET['id_barang']))
{
?>
<html>
<head>
<?php
include "Header.php";
?>
<script type="text/javascript">
//pengoperan nilai table kedalam halaman EditMaster.php
function pilihtindakan(tindakan ,id_barang, nama, jenis, lot, jumlah, lama)
{
	if (tindakan == "ubah")
	{
		//jQuery.post( UbahBarang.php [, id_barang ] [, success(id_barang, textStatus, jqXHR) ] [, dataType ] );
		//jQuery.post( UbahBarang.php [, nama ] [, success(nama, textStatus, jqXHR) ] [, dataType ] );
		//jQuery.post( UbahBarang.php [, jenis ] [, success(jenis, textStatus, jqXHR) ] [, dataType ] );
		//jQuery.post( UbahBarang.php [, jumlah ] [, success(jumlah, textStatus, jqXHR) ] [, dataType ] );
		//window.location="UbahBarang.php";
		
		//window.location="UbahBarang.php?id="+id_barang+"&nama="+nama+"&jenis="+jenis+"&jumlah="+jumlah;
		//document.write= id_barang;
		
		
		//JQUERY untuk setting form dihalaman html
		$("#txtId").val(id_barang);
		$("#txtNama").val(nama);
		$("#txtJenis").val(jenis);
		$("#txtLot").val(lot);
		$("#txtJumlah").val(jumlah);
		$("#txtLama").val(lama)
		$("#managebarang").attr("action","Ubah.php");
		$("#managebarang").submit();
	}
	else if(tindakan == "hapus")
		{
		window.location = "MasterBarang.php?id_barang="+id_barang;
		}
}
</script>
<?php
//echo "<script type='text/javascript'>"
//echo " function(elem){"

//$query = msqli_query($con,"select Nama_barang from barang")
//while ($reader= mysqli_fetch_array($query))
//{
	//if( )
	//{
	//}
//}
//echo "}"
?>
</head>
<?php
include "Body_header.php";
include "Menu.php";
?>




<div id="body">
<div id="wrapperbody">

<form name="forminputbarang" method="post" action="MasterInput.php" style="padding-bottom:50px;">



<table class="forminput" border="0"  cellspacing="-" cellpadding="-">

<tr><td width="500">Nama barang</td>

<td><input name="nama_barang" id="nama_barang" type="text" class="kotaktext" required></td></tr>

<tr><td width="500">Jenis barang</td><td><select name="jenis_barang" required>

<?php
//memasukan jenis barang dari database kedalam combobox
$query= mysqli_query($con,"select jenis_barang from jenis_barang");

while ($reader = mysqli_fetch_array($query))
{
echo "<option value='".$reader[0]."'>".$reader[0]."</option>";
}
?>
</select>
</td>

<tr><td width="500">Jumlah barang</td><td><input name="jumlah_barang" type="text" required></td></tr>
<tr><td width="500">Lot size</td><td><input name="lot" id="lot" type="text" class="kotaktext" required></td></tr>
<tr><td width="500">Lama waktu produksi</td><td><input name="waktu_produksi" id="waktu_produksi" type="text" class="kotaktext" required></td></tr>



<tr align="center" ><td colspan="3" style="padding-top:10px"><input name="tombolinputbarang" type="submit" class="tombolSimpan"></td></tr>
</table>
</form>


<div class="scroll">
<table border="2">
<tr><td>Id_barang</td><td>Nama barang</td><td>Jenis barang</td><td>Lot size</td><td>Jumlah stock</td><td>Lama waktu produksi (jam)</td><td>Tindakan</td></tr>
<form name="managebarang" id="managebarang" method="post">

<?php
//Memasukan database kedalam table di html//
$query = mysqli_query($con,"select id_barang, nama_barang, jenis_barang, lot_size, jumlah_stock, lama_waktu_produksi from barang");
while ($reader = mysqli_fetch_array($query))
{
echo "<tr><td>$reader[0]</td><td>$reader[1]</td><td>$reader[2]</td><td>$reader[3]</td><td>$reader[4]</td><td>$reader[5]</td><td><select onchange='pilihtindakan(this.value, \"$reader[0]\", \"$reader[1]\", \"$reader[2]\", \"$reader[3]\", \"$reader[4]\", \"$reader[5]\");'><option></option><option value='ubah'>ubah</option><option value='hapus'>hapus</option></select></td></tr>";
}
mysqli_close($con);
?>
<input type="hidden" id="txtId" name="txtId" />
<input type="hidden" id="txtNama" name="txtNama" />
<input type="hidden" id="txtJenis" name="txtJenis" />
<input type="hidden" id="txtLot" name="txtLot" />
<input type="hidden" id="txtJumlah" name="txtJumlah" />
<input type="hidden" id="txtLama" name="txtLama" />

</form>

</table>


</div>
</div>


</div>

</div>










<?php
include "Footer.php";
}
else
{

//penghapusan data
include "../Connect.php";
$query = mysqli_query($con,"delete from barang where id_barang='".$_GET["id_barang"]."'");
mysqli_close($con);
?>
<script type"=text/javascript">
alert("Data barang telah dihapus");
window.location = "MasterBarang.php";
</script>
<?php
}
}
else
{
include "Otoritas_gagal.php";
}
?>



