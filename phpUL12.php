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
    12 - PHP
    Daniel Žukov
    Haapsalu Kutsehariduskeskus
    20.01.2026
*/

if (!empty($_GET['s1']) && !empty($_GET['s2'])) {
    $algusaeg = $_GET['s1'];
    $lopuaeg = $_GET['s2'];
    if (strlen($algusaeg) < 4 || strlen($lopuaeg) < 4) {
        echo "palun sisestage ajad oigesti (nt hh:mm).";
    } else {
        $algusaeg1 = strtotime($algusaeg);
        $algusaeg2 = strtotime($lopuaeg);
        if ($algusaeg2 < $algusaeg1) {
            $algusaeg2 += 86400;
		}
        $erinevus = $algusaeg2 - $algusaeg1;
        $tund = floor($erinevus / 3600);
        $minut = floor(($erinevus % 3600) / 60);
        echo "soiduaeg on $tund tundi ja $minut minutit.";
    }
}

$allikas = 'tootajad.csv'; 
$minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
$meeste_palgad = array();
$naiste_palgad = array();
fgetcsv($minu_csv, filesize($allikas), ';'); 
while (($rida = fgetcsv($minu_csv, filesize($allikas), ';')) !== false) {
    if (count($rida) == 3) {
        $nimi = $rida[0];
        $sugu = $rida[1];
        $palk = (float)$rida[2];
        
        if ($sugu == 'M') {
            $meeste_palgad[] = $palk;
        } else if ($sugu == 'N') {
            $naiste_palgad[] = $palk;
        }
    }
}
fclose($minu_csv);
$meeste_keskmine = (count($meeste_palgad) > 0) ? array_sum($meeste_palgad) / count($meeste_palgad) : 0;
$naiste_keskmine = (count($naiste_palgad) > 0) ? array_sum($naiste_palgad) / count($naiste_palgad) : 0;
$meeste_korgeim = (count($meeste_palgad) > 0) ? max($meeste_palgad) : 0;
$naiste_korgeim = (count($naiste_palgad) > 0) ? max($naiste_palgad) : 0;
echo "meeste keskmine palk " . number_format($meeste_keskmine, 2) . " eur<br>";
echo "naiste keskmine palk " . number_format($naiste_keskmine, 2) . " eur<br>";
echo "meeste suur palk " . number_format($meeste_korgeim, 2) . " eur<br>";
echo "naiste suur palk " . number_format($naiste_korgeim, 2) . " eur<br>";
if ($meeste_keskmine > $naiste_keskmine) {
    echo "diskrimineerimine";
} else {
    echo "ei ole diskrimineerimist.";
}

?>
<form action="" method="get">
algusaeg <input type="number" name="s1"required><br>
lopuaeg <input type="number" name="s2"required><br>
<input type="submit" value="arvuta"><br><br>
</form>

</body>
</html>