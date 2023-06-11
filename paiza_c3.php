<?php
$input = explode(" ", trim(fgets(STDIN)));
$n = $input[0];
$m = range(1, $input[1]);
$count = 0;
foreach(range(1, $n) as $i) {
  $count++;
  $open_num = trim(fgets(STDIN));
  if (in_array($open_num, $m)) {
    $key = array_search($open_num, $m);
    unset($m[$key]);
    if (count($m) == 0) {
      break;
    }
  } 
}

if (count($m) == 0) {
  echo $count;
} else {
  echo "unlucky";
}
?>