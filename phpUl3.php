<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="">
		kulg1 <input type="text" name="a1"><br>
		kulg2 <input type="text" name="a2"><br>
		korgus <input type="text" name="h"><br>
		dia1 <input type="text" name="d1"><br>
		dia2 <input type="text" name="d2"><br>
		<input type="submit" value="arvuta">
	</form>

</body>
</html>
<?php
/*
	03 - PHP - Muutujad
	Daniel Žukov
	Haapsalu Kutsehariduskeskus
	15.01.2026
*/
$arv1 = $_GET["a1"];
$arv2 = $_GET["a2"];
$arv3 = $_GET["h"];
$trapets = ($arv1 + $arv2) / 2 * $arv3;
echo 'Arv 1: '.$arv1."<br>";
echo 'Arv 2: '.$arv2."<br>";
echo 'korgus: '.$arv3."<br>";

$arv4 = $_GET["a1"];
$arv5 = $_GET["a2"];
$romb = ($arv4 + $arv5) / 2;
echo 'Dia 1: '.$arv4."<br>";
echo 'Dia 2: '.$arv5."<br>";
?>

