<?php
$car_count = trim(fgets(STDIN));
foreach(range(1, $car_count) as $i) {
  $car_num = trim(fgets(STDIN));
  $car_ary[] = $car_num;
  $car_hash[$car_num] = 0;
}

$car_ary_sort = $car_ary;
sort($car_ary_sort);

while ($car_count != 0) {
  if ($car_ary[0] != $car_ary_sort[0]) {
    $car_hash[$car_ary[0]] += 1;
    $car_top = array_slice($car_ary, 0, 1);
    array_shift($car_ary);
    $car_ary = array_merge($car_ary, $car_top);
  } else {
    array_shift($car_ary_sort);
    array_shift($car_ary);
    $car_count--;
  }
}

krsort($car_hash);
$key = array_key_first($car_hash);
echo $car_hash[$key];
?>