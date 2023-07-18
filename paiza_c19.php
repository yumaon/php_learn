<?php
$input = explode(" ", trim(fgets(STDIN)));
$cars = $input[0];
$m = $input[1];

$i = $cars - 1;
$meter = 0;
foreach(range(1, $i) as $j) {
  $distance = trim(fgets(STDIN));
  if ($distance <= $m) {
    $meter += $distance;
  }
}

echo $meter."\n";
?>