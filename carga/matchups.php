<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python matchups.py '.$redi.'');

?>