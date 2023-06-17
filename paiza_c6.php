<?php
$input = explode(" ", trim(fgets(STDIN)));
$wind_count = $input[0];
$x_y = array_slice($input, 1, 2);

foreach(range(1, $wind_count) as $i) {
  $wind_info[] = explode(" ", trim(fgets(STDIN)));
}

$x_max_ary = [$x_y[0]];
foreach($wind_info as $wind_i) {
  $x_y[0] += $wind_i[0];
  $x_y[1] += $wind_i[1];
  array_push($x_max_ary, $x_y[0]);
  if ($x_y[1] <= 0) {
    break;
  }
}

echo max($x_max_ary);
?>