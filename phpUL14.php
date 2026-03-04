<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$kataloog = 'pildid';
if(!empty($_GET['pilt'])){
    $suur_pilt = $_GET['pilt'];
    echo "<h2>Suur pilt</h2>";
    echo "<img src='pildid/$suur_pilt' width='600'><br><br>";
}
$failid = array();
$asukoht = opendir($kataloog);
while($rida = readdir($asukoht)){
    if($rida!='.' && $rida!='..'){
        $failid[] = $rida;
    }
}
closedir($asukoht);
if(!empty($failid)){
    $suvaline_pilt = $failid[array_rand($failid)];
    echo "<img src='pildid/$suvaline_pilt' width='300'><br><br>";
}
$veerud = 3;
$loendur = 0;
echo "<table>";
$asukoht = opendir($kataloog);
while($rida = readdir($asukoht)){
    if($rida!='.' && $rida!='..'){
        if($loendur % $veerud == 0){
            echo "<tr>";
        }
        echo "<td align='center'>";
        echo "<a href='?pilt=$rida'>";
        echo "<img src='pildid/$rida' width='120'><br>";
        echo "$rida";
        echo "</a>";
        echo "</td>";
        $loendur++;
        if($loendur % $veerud == 0){
            echo "</tr>";
        }
    }
}
echo "</table>";
closedir($asukoht);
?>
</body>
</html>