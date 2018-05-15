<?php
echo gethostname() . "<br>\n";
$UniID = "10567939";
$IAM = "AKnight@Net20316";
echo hash('md5',$UniID) . "<br>\n";
echo hash('md5',$IAM) . "<br>\n";
$i = 1;
$j = 0;
$fsum = 0.0;
while ($i <= 100000):
$j = rand();
#
echo $j . "<br>\n";
$fsum = $fsum + $j*$j/getrandmax()/getrandmax();
$i++;
endwhile;
echo "\n" . $fsum/$i . "<br>\n";
$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
echo "Time: {$time}";
?>
