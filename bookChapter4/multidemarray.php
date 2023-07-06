<?php

$n = array(); // асоциативен масив

$n = array('server' => '192.168.1.1',
           'mail'=> '192.168.1.2',
            'den' => '192.168.1.3');

//print_r($n);


$people['washinthon'] = array ('name' => 'george' , 'year' => 1732);
$people['franklin'] = array ('name' => 'benjamin' , 'year' => 1706);

//echo $people['washinthon']['name'].PHP_EOL;
//echo $people['franklin']['year'];

//unset($people);
//var_dump($people);

$a = array(1,2,3);
$b = array(4, 5, 6);
$c = array_merge($a, $b);

var_dump($c);