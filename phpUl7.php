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
	04 - PHP
	Daniel Žukov
	Haapsalu Kutsehariduskeskus
	20.01.2026
*/
function tervita(){
    return "Tere paiksekesekene!";  
}
echo tervita() . "<br>";
function email($nimi) {
    $nimi = strtolower($nimi);  
    $email = $nimi . "@hkhk.edu.ee";  
    return $email;
}
function erty() {
    $kood = '';
    for ($i = 0; $i < 7; $i++) {
        $suvaline = rand(0, 1) ? rand(0, 9) : chr(rand(65, 90));  
        $kood .= $suvaline;  
    }
    return $kood;
}
function looarvud($alust, $lopp, $samm = 1) {
    $arvud = [];
    for ($i = $alust; $i <= $lopp; $i += $samm) {
        $arvud[] = $i;
    }
    return $arvud;
}
function ristkylik($pikkus, $laius) {
    return $pikkus * $laius;  
}
function isikukood($isikukood) {
    if (strlen($isikukood) != 11) {  
        return "isikukood ei ole oige pikkusega.";
    }
    $sugu = (int)$isikukood[0] % 2 == 0 ? "Naine" : "Mees";  
    $sunniaasta = "19" . substr($isikukood, 1, 2);
    $sunnikuu = substr($isikukood, 3, 2);
    $sunnipaev = substr($isikukood, 5, 2);
    
    return "sugu: $sugu, sunniaeg: $sunniaasta-$sunnikuu-$sunnipaev";  
}
function lause() {
    $alus = ["ma", "sa", "ta"];
    $oeldis = ["olen", "soovin", "tahan"];
    $sihitis = ["kodu", "puhkust", "onne"];
    $aalus = $alus[array_rand($alus)];
    $ooeldis = $oeldis[array_rand($oeldis)];
    $ssihitis = $sihitis[array_rand($sihitis)];
    
    return "$aalus $ooeldis $ssihitis.";  
}
echo "Kasutaja email: " . email("Karin") . "<br>";
echo "Seitsme koha kood: " . erty() . "<br>";
echo "Arvud vahemikust 2-8 (samm 3): ";
print_r(looarvud(2, 8, 3));  
echo "<br>";
echo "Ristkyliku pindala (pikkus 5, laius 8): " . ristkylik(5, 8) . "<br>";
echo "Isikukood: 38905123456 - " . isikukood("38905123456") . "<br>";
echo "Suvaline lause: " . lause() . "<br>";

?>
<form action="">
Kasutajanimi <input type="number" name="a1"><br>
Parool <input type="number" name="a2"><br>
<input type="submit" value="Login"><br><br>
</form>
</body>
</html>
