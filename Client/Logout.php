<?php


session_start();
unset($_SESSION['otoritas']);

?>

<html>
<head>
<Title>Bioli</title>
<script type="text/Javascript">
function redirect()
{
window.location = "Index.php"
}
</script>
<link rel="stylesheet" type="text/css" href="../Css/Client.css" />
</head>
<body onLoad="setTimeout('redirect()',500)">

<div id="body"><div id="body-contain">aaaaaaa</div>
</div>

</body>
</html>