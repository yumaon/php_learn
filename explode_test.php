<?php
$input = trim(fgets(STDIN));
$ary = explode(" ", $input);
print_r($ary);
$num = count($ary);
for ($i = 0; $i < $num; $i++) {
  echo $ary[$i]."\n";
}
?>