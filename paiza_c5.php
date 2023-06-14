<?php
$q_count = trim(fgets(STDIN));
$point = 0;
foreach(range(1, $q_count) as $i) {
  $input = explode(" ", trim(fgets(STDIN)));
  // $q[] = preg_split('//u', $input[0], -1, PREG_SPLIT_NO_EMPTY);
  // $a[] = preg_split('//u', $input[1], -1, PREG_SPLIT_NO_EMPTY);
  $q = str_split($input[0], 1);
  $a = str_split($input[1], 1);
  // echo count($q)."\n";
  // echo count($a)."\n";
  if (count($q) == count($a)) {
    $miss_count = 0;
    while(0 < count($q)) {
      if ($q[0] == $a[0]) {
        array_shift($q);
        array_shift($a);
      } else {
        $miss_count++;
        array_shift($q);
        array_shift($a);
      }
    }
    if ($miss_count == 0) {
      $point += 2;
    } elseif ($miss_count == 1) {
      $point += 1;
    } 
  }
}

echo $point."\n";
?>