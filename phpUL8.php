<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
/*
	08 - PHP
	Daniel Žukov
	Haapsalu Kutsehariduskeskus
	20.01.2026
*/
echo date('d.m.Y G:i <br>', time());
$synniaeg = new DateTime('2006-03-20');
$tahts = new DateTime();
$vanus = $synniaeg->diff($tahts);
echo "<br> kasutaja vanus on " . $vanus->y . " aastat.";
$praegu = new DateTime();
$koolilopp = new DateTime('2026-06-30');
$paevadevahe = $praegu->diff($koolilopp);
echo "<br>kooliaasta lopuni on jaanud " . $paevadevahe->days . " paeva.";
$kuu = date('m');
if ($kuu >= 3 && $kuu <= 5) {
    echo '<br><img src="kevad.jpg" alt="kevad">';
} elseif ($kuu >= 6 && $kuu <= 8) {
    echo '<br><img src="suvi.jpg" alt="suvi">';
} elseif ($kuu >= 9 && $kuu <= 11) {
    echo '<br><img src="sugis.jpg" alt="sugis">';
} else {
    echo '<br><img src="talv.jpg" alt="talv">';
}
?>
<form action="">

</form>
</body>
</html>
