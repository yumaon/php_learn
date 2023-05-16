<?php
$input = trim(fgets(STDIN));
$ary = explode(",", $input);
rsort($ary);
print_r($ary);

?>
