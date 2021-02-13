<?php
$redi    	   = $_POST['redi'];
echo shell_exec('python matchup.py '.$redi.'');

?>