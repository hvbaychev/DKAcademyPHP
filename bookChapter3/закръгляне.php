<?php


echo ceil(2.45); // 3
echo floor(2.99); //2
echo round(6.45656); // 6
echo round(5.055, 2); // 5.06
echo round(3.4); // 3
echo round(3.5); // 4
echo round(3.6); //4
echo round(3.6, 0); //3
echo round(1.9583, 2); // 1.96
echo round(1241757. -3); // 1242000
echo round(5.045, 2); //5.05

echo round(9.5,0,PHP_ROUND_HALF_UP); //10
echo round(9.5,0,PHP_ROUND_HALF_DOWN); //9
echo round(9.5,0,PHP_ROUND_HALF_EVEN); //10
echo round(9.5,0,PHP_ROUND_HALF_ODD); //9


