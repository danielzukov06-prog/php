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
?>
<form action="" method="get">
algusaeg <input type="number" name="s1"required><br>
lopuaeg <input type="number" name="s2"required><br>
<input type="submit" value="arvuta"><br><br>
</form>

</body>
</html>