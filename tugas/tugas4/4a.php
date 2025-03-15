<?php 

$array = ["epan", "cipta", "akan", "u", "asa", "esok"];
$sambung = implode("", $array);
echo "M" . substr($sambung,14,3 ) . " d" . substr($sambung,0,4) . "mu di" . substr($sambung,4,5) . "kan oleh apa yang kau kerj" . substr($sambung,9,4) . " hari ini, b" . substr($sambung,13,1) . "kan b" . substr($sambung,17,4);