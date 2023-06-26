<?php
$input = explode(" ", trim(fgets(STDIN)));
$carrot_data_count = $input[0];
$standard_value = $input[1];
$limit_error = $input[2];

foreach(range(1, $carrot_data_count) as $i) {
  $carrot_data_hash[$i] = explode(" ", trim(fgets(STDIN)));
}

$limit_border = $standard_value - $limit_error;
$limit_top = $standard_value + $limit_error;

$carrot_ary = [];
foreach($carrot_data_hash as $k => $v) {
  if($limit_border <= $v[1] && $v[1] <= $limit_top) {
    $carrot_ary[] = [$k, $v[0]];
  }
}

if(count($carrot_ary) == 0) {
  echo "not found\n";
} else {
  $column = array_column($carrot_ary, 1);
  array_multisort($column, SORT_DESC, $carrot_ary);
  echo $carrot_ary[0][0]."\n";
}
?>