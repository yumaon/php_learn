<?php
$af_6 = explode(" ", trim(fgets(STDIN)));
$buy_count = trim(fgets(STDIN));
for($i = 0; $i < $buy_count; $i++) {
  $input = trim(fgets(STDIN));
  $my_nums[] = explode(" ", $input);
}
$result = 0;
foreach ($my_nums as $nums) {
  foreach ($nums as $n) {
    if (in_array ($n, $af_6)) {
      $result++;
    }
  }
  $result_ary[] = $result;
  $result = 0;
}
foreach ($result_ary as $r) {
  echo $r."\n";
}
?>
