<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python futures.py '.$redi.'');
?>