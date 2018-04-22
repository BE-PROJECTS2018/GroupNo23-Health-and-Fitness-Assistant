<?php
$output = shell_exec('python test.py ');
$a = ".php";
$output = trim($output).$a;
echo $output;
header("location: $output")
?>
