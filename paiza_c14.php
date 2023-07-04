<?php
$c = trim(fgets(STDIN));
$point = 0;
foreach(range(1, $c) as $i) {
  $input = explode(" ", trim(fgets(STDIN)));
  $day_info = str_split($input[0]);
  $price = $input[1];
  if (in_array(3, $day_info)) {
    $point += floor($price * 0.03);
  } elseif (in_array(5, $day_info)) {
    $point += floor($price * 0.05);
  } else {
    $point += floor($price * 0.01);
  }
}
echo $point."\n";
?>