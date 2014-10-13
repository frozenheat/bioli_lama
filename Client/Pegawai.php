<?php

$bagian=$_GET["bagian"];
date_default_timezone_set("Asia/Jakarta");
$skrg = date("H:i:s");
echo $skrg;
if($bagian=="admin")
{
?>



<form name="forminputadmin" method="post" action="MasterInput.php">


<table class="forminput" border="0"  cellspacing="-" cellpadding="-" align="center" style="padding-top:40px;">

<tr><td width="500">Nama admin</td>

<td><input name="nama" id="nama" type="text" required ></td></tr>

<tr><td width="500">Alamat admin</td>
<td><input name="alamat" id="alamat" type="text" required ></td></tr>

<tr><td width="500">Jenis kelamin</td>
<td style="width: 50px;"><input name="jenis_kelamin" type="radio" value="pria" required >pria &nbsp; <input name="jenis_kelamin" type="radio" value="wanita" required >wanita</td></tr>

<tr><td width="500">Password admin</td>
<td><input name="password" id="password" type="text" required ></td></tr>

<tr><td width="500">Alamat email admin</td>
<td><input name="alamat_email" id="alamat_email" type="text" required ></td></tr>

<input name="otoritas" id="otoritas" type="hidden" value=<?php echo $_GET['bagian'];?> >


<tr align="center"><td " colspan="3" style="padding-top:10px" ><input name="tombolinputadmin" type="submit" class="tombolSimpan"></td></tr>


</table>

<div class="scroll">
<table border="2" align="center" class="Pegawai">
<tr><td>NIP</td><td>Nama Pegawai</td><td>Alamat</td><td>Jenis Kelamin</td><td>alamat email</td><td>Tindakan</td></tr>


<?php
//Memasukan database kedalam table di html//
include "../Connect.php";
$query = mysqli_query($con,"select nip, nama_pegawai, alamat_pegawai,jenis_kelamin, email_pegawai from pegawai where otoritas = 'admin'");
while ($reader = mysqli_fetch_array($query))
{
echo "<tr><td>$reader[0]</td><td>$reader[1]</td><td>$reader[2]</td><td>$reader[3]</td><td>$reader[4]</td><td><select onchange='pilihtindakan(this.value, \"$reader[0]\", \"$reader[1]\", \"$reader[2]\", \"$reader[3]\", \"$reader[4]\");'><option></option><option value='ubah'>ubah</option><option value='hapus'>hapus</option></select></td></tr>";
}
mysqli_close($con);
?>




</table>
</div>









<?php
}
else if ($bagian=="sales")
{
?>

<form name="forminputsales" method="post" action="MasterInput.php">

<table class="forminput" border="0"  cellspacing="-" cellpadding="-">

<tr><td width="500">Nama sales</td>

<td><input name="nama_sales" id="nama_sales" type="text"></td></tr>

<tr><td width="500">Alamat sales</td>
<td><input name="alamat_sales" id="alamat_sales" type="text"></td></tr>

<tr><td width="500">Jenis kelamin</td>
<td style="width: 50px;"><input name="jenis_kelamin" type="radio" value="pria">pria &nbsp; <input name="jenis_kelamin" type="radio" value="wanita">wanita</td></tr>

<tr><td width="500">Alamat email</td>
<td><input name="alamat_email" id="alamat_email" type="text"></td></tr>


<tr><td width="500">Omset penjualan</td>
<td><input name="omset_penjualan" id="omset_penjualan" type="text"></td></tr>

<input name="otoritas" id="otoritas" type="hidden" value=<?php echo $_GET['bagian'];?> >

<tr align="center"><td colspan="3" style="padding-top:10px"><input name="tombolinputsales" type="submit" class="tombolSimpan"></td></tr>
</table>





<?php
}
else if ($bagian="produksi")
{
?>

<form name="forminputadmin" method="post" action="MasterInput.php">

<table class="forminput" border="0"  cellspacing="-" cellpadding="-">

<tr><td width="500">Nama</td>

<td><input name="nama_produksi" id="nama_produksi" type="text"></td></tr>

<tr><td width="500">Alamat</td>
<td><input name="alamat_produksi" id="alamat_produksi" type="text"></td></tr>

<tr><td width="500">Jenis kelamin</td>
<td style="width: 50px;"><input name="jenis_kelamin" type="radio" value="pria">pria &nbsp; <input name="jenis_kelamin" type="radio" value="wanita">wanita</td></tr>

<tr><td width="500">Alamat email</td>
<td><input name="alamat_email" id="alamat_email" type="text"></td></tr>

<input name="otoritas" id="otoritas" type="hidden" value=<?php echo $_GET['bagian'];?> >
<tr align="center"><td colspan="3" style="padding-top:10px" ><input name="tombolinputproduksi" type="submit" class="tombolSimpan"></td></tr>
</table>

<div class="scroll">
<table border="2" align="center" class="Pegawai">
<tr><td>NIP</td><td>Nama Pegawai</td><td>Alamat</td><td>Jenis Kelamin</td><td>alamat email</td><td>Tindakan</td></tr>


<?php
//Memasukan database kedalam table di html//
include "../Connect.php";
$query = mysqli_query($con,"select nip, nama_pegawai, alamat, jenis_kelamin, alamat_email from pegawai where otoritas = 'produksi'");
while ($reader = mysqli_fetch_array($query))
{
echo "<tr><td>$reader[0]</td><td>$reader[1]</td><td>$reader[2]</td><td>$reader[3]</td><td>$reader[4]</td><td><select onchange='pilihtindakan(this.value, \"$reader[0]\", \"$reader[1]\", \"$reader[2]\", \"$reader[3]\", \"$reader[4]\");'><option></option><option value='ubah'>ubah</option><option value='hapus'>hapus</option></select></td></tr>";
}
mysqli_close($con);
?>




</table>
</div>



<?php
}
?>

