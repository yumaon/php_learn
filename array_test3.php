<?php
for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	$key_value =explode("/", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	$team[$key] = $value;

}
print_r($team);

?>
