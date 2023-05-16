<?php
while($input = trim(fgets(STDIN))) {
  $ary = explode(",", $input);
  $key = $ary[0];
  $item[$key] = $ary[1];
}
arsort($item);
print_r($item);
?>
