<?php

function validateDate($date, $format = 'Y-m-d H:i:s'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

var_dump(validateDate('2020-02-28 12:12:12'));
var_dump(validateDate('2020-02-30 12:12:12'));