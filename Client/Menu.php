<?php
if($_SESSION['otoritas']=='pemasaran')
{
?>
<div id="wrapper_menu">
<div id="menu">
<div id="cssmenu">
<ul>
   <li><a href='Halaman_utama.php'><span>Beranda</span></a></li>
   <li class='has-sub '><a href='#'><span>Master</span></a>
      <ul>
         <li class='has-sub '><a href='MasterBarang.php'><span>Barang</span></a></li>
         <li class='has-sub '><a href='MasterPegawai.php'><span>Pelanggan</span></a></li>              
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Contact</span></a></li>
   <li><a href='Logout.php'><span>Logout</span></a></li>
   </ul>
</div>
</div>

</div>
<?php
}
if ($_SESSION['otoritas']=="admin")
{
?>
<div id="wrapper_menu">
<div id="menu">
<div id="cssmenu">
<ul>
   <li><a href='Halaman_utama.php'><span>Beranda</span></a></li>
   <li class='has-sub '><a href='#'><span>Master</span></a>
      <ul>

         <li class='has-sub '><a href='MasterPegawai.php'><span>Pegawai</span></a></li>              
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Contact</span></a></li>
   <li><a href='Logout.php'><span>Logout</span></a></li>
   </ul>
</div>
</div>

</div>
<?php
}
else if($_SESSION['otoritas']=='produksi')
{
?>
<div id="wrapper_menu">
<div id="menu">
<div id="cssmenu">
<ul>
   <li><a href='Halaman_utama.php'><span>Beranda</span></a></li>
   <li class='has-sub '><a href='#'><span>Master</span></a>
      <ul>
         <li class='has-sub '><a href='MasterBarang.php'><span>Barang</span></a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'><span>Contact</span></a></li>
   <li><a href='Logout.php'><span>Logout</span></a></li>
   </ul>
</div>
</div>

</div>
<?php
}
?>

