<?php

$date1 = new DateTime("2021-07-06");
$date2 = new DateTime("2021-07-09");

$diff = $date2->diff($date1)->format("%a");
var_dump($diff);


$start = strtotime("2021-01-25");
$end = strtotime("2021-02-20");

$daysBetween = ceil(abs($end-$start)/86400);
var_dump($daysBetween);