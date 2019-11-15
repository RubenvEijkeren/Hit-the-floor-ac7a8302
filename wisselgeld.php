<<?php
$getal = intval($argv[1]);
$getal2 = floor($getal/10);
if ($getal == 10)
	$getal2 = 0;
$getal3 = floor(($getal - ($getal2*10))/5);
	if ($getal == 5)
		$getal3 = 0;
$getal4	= floor(($getal - ($getal2*10 + $getal3*5))/2);
	if ($getal == 2)
		$getal4 = 0;
$getal5 = floor(($getal - ($getal2*10 + $getal3*5 + $getal4*2)));

if ($getal == 0){
	echo "Geen wisselgeld\n";
	exit;
}
if ($getal2 != 0)
	echo $getal2 . " x 10 euro\n";
if ($getal3 != 0)
	echo $getal3 . " x 5 euro\n";
if ($getal4 != 0)
	echo $getal4 . " x 2 euro\n";
if ($getal5 != 0)
	echo $getal5 . " x 1 euro\n";
?>