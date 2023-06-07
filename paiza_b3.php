<?php
$input = explode(" ", trim(fgets(STDIN)));
$cards_num = $input[0];
$set_num = $input[1];
$shuffle_num = $input[2];
$ary = range(1, $cards_num);

foreach(range(1, $shuffle_num) as $i) {
  $ary = array_chunk($ary, $set_num);
  $ary = array_reverse($ary);
  $ary = array_merge(...$ary);
}

foreach($ary as $value) {
  echo $value."\n";
}
?>