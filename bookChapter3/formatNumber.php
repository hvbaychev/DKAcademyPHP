<?php

$number = 1234.56;

// angl.format
$englishFormatNumber = number_format($number); // 1,235

$frenchFormatNumber = number_format($number, 2, ',', ' '); // 1 234,56

//angl format bez razdelitel
$englishWoFormatNumber = number_format($number, 2, '.', ''); // 1234.57

