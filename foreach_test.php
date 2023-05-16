<?php
while($input = trim(fgets(STDIN))){
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	$item[$key] = $value;
}

foreach ($item as $key => $val) {
  if ($val <= 2000) {
    $under_items[$key] = $val;
  }
}
arsort($under_items);
print_r($under_items);
?>