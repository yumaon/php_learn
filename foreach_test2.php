<?php
while($input = trim(fgets(STDIN))){
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	$result[$key] = $value;
}

arsort($result);
print_r($result);
$i = 1;
foreach ($result as $key => $val) {
    if ($key == "勇者") {
        echo $i;
    }
    $i++;
}
?>