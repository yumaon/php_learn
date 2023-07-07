<?php
$input = explode(" ", trim(fgets(STDIN)));
$a_t = $input[0];
$count = $input[1];
$active_time = range(1, $a_t);

$key_time = [];
$mission_ary = [];
foreach(range(1, $count) as $i) {
  $inputs = explode(" ", trim(fgets(STDIN)));
  $key_time[] = $inputs[0];
  $mission_ary[] = $inputs[1];
}

$j = 0;
$puts_array = [];
foreach($active_time as $active) {
  while ($j < $count) {
    if ($active % $key_time[$j] == 0) {
      if (in_array($active, $puts_array)) {
        $puts_array = [];
      }
      $puts_array[] = $mission_ary[$j];
      $j++;
    } else {
      if (empty($puts_array)) {
        $puts_array[] = $active;
      }
      $j++;
    }
  }
  echo implode(" ",$puts_array)."\n";
  $j = 0;
  $puts_array = [];
}
?>