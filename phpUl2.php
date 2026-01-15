<?php
/*
	02 - PHP - Muutujad
	Daniel Žukov
	Haapsalu Kutsehariduskeskus
	15.01.2026
*/
//echo "Vastused: <br>$x + $y = $liitm <br>$x - $y = $lahut <br>$x * $y = $korru <br>$x / $y = $jagam <br>$x % $y = $jaak";

$x = 6574;
$y = 4592;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
$mm = 1243;
$cm = $mm / 10;
$m = $mm / 1000;
echo sprintf('%d mm on %0.2f cm<br>', $mm, $cm);
echo sprintf('%d mm on %0.2f m<br>', $mm, $m);

echo "<br>";
echo sprintf('%d + %d = %d<br>', $x, $y, $liitm);
echo sprintf('%d - %d = %d<br>', $x, $y, $lahut);
echo sprintf('%d / %d = %d<br>', $x, $y, $korru);
echo sprintf('%d * %d = %d<br>', $x, $y, $jagam);
echo sprintf('%d + %d = %d<br>', $x, $y, $jaak);

$a = 10;
$b = 5;
$c = 2;
$ymb = $a+$b+$c;
$pind = $a*$b/2;
echo sprintf('%d mm on %0.2f m<br>', $mm, $m);







?>

