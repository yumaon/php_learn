<?php
$input = explode(" ",trim(fgets(STDIN)));
$house = $input[0];
$men = $input[1];
$cry = $input[2];
foreach(range(1, $men) as $i) {
  $men_hidden_ary[] = trim(fgets(STDIN));
}
sort($men_hidden_ary);

// print_r($men_hidden_ary);

$house_ary = range(1, $house);

$cry_count = 0;
$sweets_count = 0;
foreach($house_ary as $h) {
  if(!(in_array($h, $men_hidden_ary))) {
    $sweets_count++;
    if($cry_count >= 0) {
      $cry_count = 0;
    }
  } else {
    $cry_count++;
    if ($cry_count == $cry) {
      break;
    }
  }
}

echo $sweets_count."\n";
?>