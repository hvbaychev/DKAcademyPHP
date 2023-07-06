<?php

$a = 'aaa';
$b = 'bbb';

$arr = compact('a' , 'b');

//print_r($arr);

print_r(extract($arr));