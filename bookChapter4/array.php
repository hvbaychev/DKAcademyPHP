<?php

for ($i = 0; $i<100; $i++){
    $array[] = $i;
}

//var_dump($array);


$array2 = range(0,99); // обикновен масив

//var_dump($array2);

for ($j = 100; $j>=0; $j--){
    $array3[] = $j; 
}

//var_dump($array3);


$os[0] = 'linux';
$os[1] = 'windows';
$os[2] = 'mac';
$os[3] = 'bsd';

//print_r($os);

$os1 = array('linux', 'windows', 'mac', 'bsd');  // списък
//print_r($os1);


$os3[10] = 'linux';
$os3[3] = 'windows';
$os3[20] = 'mac';
$os3[35] = 'bsd';

//print_r($os3);


$array = [
    [1, 2],
    [3, 4]
];

foreach ($array as list ($a, $b)){
    echo "A: $a; B: $b".PHP_EOL;
}