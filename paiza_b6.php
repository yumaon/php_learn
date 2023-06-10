<?php
$input = explode(" ", trim(fgets(STDIN)));
$h = $input[0];
$w = $input[1];
foreach(range(1, $h) as $j) {
  $field_ary[] = preg_split('//u', trim(fgets(STDIN)), -1, PREG_SPLIT_NO_EMPTY);
}

$bomb_count = 0;
foreach($field_ary as $f) {
  foreach($f as $bom) {
    if ($bom == "#") {
      $bomb_count += 1;
    }
  }
}

$i = 0;
$n = 0;
$c = 0;

$bom_area_count = 0;

while($i < $h) {
  if ($field_ary[$i][$n] == "#") {
    foreach($field_ary as &$field) { // 参照渡し
      if ($field[$n] == ".") {
        $field[$n] = "x";
        $bom_area_count += 1;
      }
    }
    unset($field); // 参照渡しをしているため、変数を未定義の状態にする。参照渡しにより、foreachを抜けたあとも参照されているため。
    while($c < $w) {
      if ($field_ary[$i][$c] == ".") {
        $field_ary[$i][$c] = "x";
        $bom_area_count += 1;
      }
      $c += 1;
    }
    $c = 0;
  }
  $n += 1;
  if ($n == $w) {
    $i += 1;
    $n = 0;
  }
}

echo $bom_area_count + $bomb_count."\n";

// foreach($field_ary as $field) {
//   echo implode(" ", $field)."\n";
// }
?>