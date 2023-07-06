<?php

$motd = file("info.txt");

$k = mt_rand(0,99);
mt_srand(time()+(double)microtime()*$k);

$k = mt_rand(0, count($motd));

echo $motd[$k];