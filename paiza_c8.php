<?php
$input = explode(" ",trim(fgets(STDIN)));
$x = $input[0];
$y = $input[1];
$z = $input[2];
$n = trim(fgets(STDIN));
$price = 0;
foreach(range(1, $n) as $i) {
  $time = explode(" ", trim(fgets(STDIN)));
  $time_ary = range($time[0], $time[1]);
  array_shift($time_ary);
  foreach($time_ary as $t) {
    if (9 < $t && $t <= 17) {
      $price += $x;
    } elseif (17 < $t && $t <= 22) {
      $price += $y;
    } else {
      $price += $z;
    }
  }
}

echo $price;
?>