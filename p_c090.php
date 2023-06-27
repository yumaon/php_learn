<?php
$input = explode("-", trim(fgets(STDIN)));
$num_ary = [12, 3, 4, 5, 6, 7, 8 ,9 ,10 ,11];
$total = 0;
foreach($input as $nums) {
  $nums = str_split($nums, 1);
  foreach($nums as $n) {
    $value = $num_ary[$n] * 2;
    $total += $value; 
  }
}

echo $total."\n";
?>