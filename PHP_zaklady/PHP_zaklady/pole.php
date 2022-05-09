<?php
$y= [1 => 2, 5 => 3, 6=> 4];
var_dump(
    isset($y[5]),
    array_key_exists(5,$y)
);