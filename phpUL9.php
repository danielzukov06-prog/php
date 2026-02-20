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
$nimi = "mARio";
$tervitus = "tere " . ucfirst(strtolower($nimi));
echo $tervitus . "<br>";
$tekst = "stalker";
$tekst = implode(".", str_split(strtoupper($tekst))) . ".";
echo $tekst . "<br>";
$tekst = "sa oled taielik noob";
$ropudsonad = array('noob');
$asendus = array('***', '***');
$tekst = str_ireplace($ropudsonad, $asendus, $tekst);
echo $tekst . "<br>";
$enimi = "Ülle";
$pnimi = "Doos";
$enimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($enimi));
$pnimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($pnimi));
$email = $enimi . "." . $pnimi . "@hkhk.edu.ee";
echo $email . "<br>";
?>
<form action="">

</form>
</body>
</html>
