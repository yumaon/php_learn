<?php
$input = explode(" ",trim(fgets(STDIN)));
$num1 = $input[0];
$num2 = $input[1];
$ary = range($num1, $num2);

$num_ary = [];
foreach($ary as $n) {
  if (!preg_match("/[23457]/", (string)$n)) {
    $num_ary[] = $n;
  }
}

$count = 0;
foreach($num_ary as $i) {
  if ($i == 0 || $i == 1 || $i == 8 && strlen($i) == 1) {
    $count++;
  } else {
    $i = str_split($i);
    $re_i = array_reverse($i);
    foreach($re_i as &$num) {
      if (!$num == 0 || $num == 1 || $num == 8) {
        if ($num == 6) {
          $num = 9;
        } elseif ($num == 9) {
          $num = 6;
        }
      }
    }
    if ($i == $re_i) {
      $count++;
    }
  }
}

echo $count."\n";
?>