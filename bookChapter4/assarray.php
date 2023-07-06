<?php

$ns['server'] = "192.168.1.1";
$ns['mail'] = "192.168.1.2";
$ns['den'] = "192.168.1.3";

//echo $ns['den'];

foreach ($ns as $k => $v){
    echo $k.PHP_EOL;
}