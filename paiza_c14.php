<?php
$c = trim(fgets(STDIN));
foreach(range(1, $c) as $i) {
  $array[] = explode(" ", trim(fgets(STDIN)));
}

$point = 0;
foreach(range(0, ($c - 1)) as $i) {
  $day_info = str_split($array[$i][0]);
  if (in_array(3, $day_info)) {
    $point += floor($array[$i][1] * 0.03);
  } elseif (in_array(5, $day_info)) {
    $point += floor($array[$i][1] * 0.05);
  } else {
    $point += floor($array[$i][1] * 0.01);
  }
}

echo $point."\n";
?>