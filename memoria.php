<?php

$array = new SplFixedArray(32769);

for ($i = 0; $i < 32769; $i++) {
    $array[$i] = $i;
}

var_dump(memory_get_usage() / 1024 / 1024);