<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python injuries.py '.$redi.'');
?>