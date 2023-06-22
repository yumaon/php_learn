<?php
$input = explode(" ", trim(fgets(STDIN)));
$h = $input[0];
$w = $input[1];

foreach(range(1, $h) as $i) {
  $nums = explode(" ",trim(fgets(STDIN)));
  foreach($nums as $j => $a) {
    if($a >= 128) {
      $nums[$j] = 1;
    } elseif($a <= 127) {
      $nums[$j] = 0;
    }
  }
  $ary[] = $nums;
}
foreach($ary as $values) {
  echo implode(" ", $values)."\n";
}
?>