<?php
$map = new \Ds\Map();
var_dump($map);

$map = new \Ds\Map(["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]);
unset($map[address]);
var_dump($map);
?>