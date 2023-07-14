<?php
$personCount = trim(fgets(STDIN));
$le_ary = [];
$ge_ary = [];
foreach(range(1, $personCount) as $i) {
  $input = explode(" ", trim(fgets(STDIN)));
  if ($input[0] == "le") {
    $le_ary[] = $input[1];
  } elseif ($input[0] == "ge") {
    $ge_ary[] = $input[1];
  }
}
sort($le_ary);
rsort($ge_ary);

echo $ge_ary[0]." ".$le_ary[0]."\n";
?>