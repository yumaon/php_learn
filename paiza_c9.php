<?php
$player_count = trim(fgets(STDIN));
$num_ary = explode(" ", trim(fgets(STDIN)));

if (in_array("x10", $num_ary)) {
  $num_ary = array_diff($num_ary, array("x10"));
  $num_ary = array_values($num_ary);
  if (in_array(0, $num_ary)) {
    $max_value = max($num_ary);
    $total = (array_sum($num_ary) - $max_value) * 10;
  } else {
    $total = array_sum($num_ary) * 10;
  }
} else {
  if (in_array(0, $num_ary)) {
    $max_value = max($num_ary);
    $total = array_sum($num_ary) - $max_value;
  } else {
    $total = array_sum($num_ary);
  }
}

echo $total."\n";
?>