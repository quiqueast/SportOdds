<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python oddsVegas.py '.$redi.'');

?>