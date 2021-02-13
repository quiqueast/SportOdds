<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python general.py '.$redi.'');
?>
<script src="./asset/funciones/browser.js"></script>