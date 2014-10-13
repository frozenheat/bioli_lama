

<div id="footer">
<div id="footer-contain">
<center>
<p class="footer">Copyright &copy; 2014 PT.Bioli Lestari <br> Designed by Herry Susanto Kwee</p>
</center>
</div>
</div>


</body>
</html>
<?php
$pagedata = pathinfo($_SERVER['REQUEST_URI']); //pathinfo() is a cool function that parses REQUEST_URI for us!

$_SESSION['last_page_visited'] = $pagedata['basename']; // basename is part of the output of the pathinfo() call above.

//echo $_SESSION['last_page_visited'];
?>