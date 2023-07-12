<?php
$input = explode(" ", trim(fgets(STDIN)));
$dataCount = $input[0];
$r = $input[1];
$data_ary = [];
foreach(range(1, $dataCount) as $i) {
  $data_ary[] = trim(fgets(STDIN));
}
$maxD = max($data_ary);
$pointCount = $maxD / $r;

$i = 1;
$grafHash = [];
foreach($data_ary as $data) {
  $point = $data / $r;
  $ary = [];
  foreach(range(1, $pointCount) as $j) {
    $ary[] = ".";
  }
  foreach(range(1, $point) as $j) {
    array_shift($ary);
    $ary[] = "*";
  }
  $ary = array_reverse($ary);
  $grafHash[$i] = $ary;
  $i++;
}

foreach($grafHash as $key => $value) {
  echo $key.":";
  echo implode("", $value)."\n";
}
?>