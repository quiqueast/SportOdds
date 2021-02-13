<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python odds.py '.$redi.'');

?>