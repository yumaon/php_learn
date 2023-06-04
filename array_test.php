<?php
// $array = array("戦士","侍","僧侶","魔法使い");
// print_r($array);
$input = explode(" ",trim(fgets(STDIN)));
$num_a = $input[0];
$num_b = $input[1];
$count = $input[2];

foreach(range(1, $count) as $i) {
  $numbers["Box".$i] = $num_a + $num_b + trim(fgets(STDIN));
}

foreach($numbers as $key => $value) {
  echo $key." ".$value."\n";
}
?>