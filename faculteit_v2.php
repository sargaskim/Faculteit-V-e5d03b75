<?php

$computter1 = 'Van welk getal wil je de faculteit weten?'.PHP_EOL;

$n = readline("");
$x = 1;
while ($i <= $n-1){
    $x*=($i+1);  
    $i++;
}
echo 'De faculteit van ', $n, ' is ', $x;

?>