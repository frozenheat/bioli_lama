
<script type="text/Javascript">
function redirect()
{

<?php
//echo "alert('Anda belum login dengan otoritas ini');";
header("location:".$_SESSION['last_page_visited']);
?>
}
</script>


<link rel="stylesheet" type="text/css" href="../Css/Client.css" />


<body onLoad = "redirect()">
<div id="header_loading"></div>
<div id="body"><div id="body_top"></div><div id="body_contain"></center></div></div>
