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
// 7, Hinne, korras
$opilanepunktid = $_GET['u1'];
if (!empty($_GET['u1'])) {
    switch(true) {
        case ($opilanepunktid > 10):
            echo 'super';
            break;
        case ($opilanepunktid >= 5 && $opilanepunktid <= 10):
            echo 'tehtud';
            break;
        case ($opilanepunktid < 5):
            echo 'KASIN';
            break;
    }
} else {
    echo 'SISESTA OMA PUNKTID';
}
/*
// 6 Juubel, korras.
if (!empty($_GET['g1'])) {
    $synniaasta = intval($_GET['g1']);
    $aasta = date("Y");
    $vanus = $aasta - $synniaasta;
    if ($vanus % 10 == 0) {
        echo 'Juubel';
    } else {
        echo 'Ei ole juubeliaasta';
    }
}

// 4, 5, Ristkülik või ruut, korras.
if (!empty($_GET['s1']) && !empty($_GET['s2'])) {
    $vaartus1 = $_GET['s1'];
    $vaartus2 = $_GET['s2']; 
    if ($vaartus1 == $vaartus2) {
        echo "Ruut"; 
        echo '<img src="https://th.bing.com/th/id/R.1b6212c3edcb7c0cb7fed8547d0e7dbd?rik=GPwad7q%2fjWsRDw&riu=http%3a%2f%2fneemematemaatika.weebly.com%2fuploads%2f5%2f1%2f8%2f0%2f51805645%2f5265040_orig.gif&ehk=JmCbOZGWTL9k2gXF%2fTYGHgMg4k46QgMelPBD8J7k27U%3d&risl=&pid=ImgRaw&r=0" alt="">
';
    } else {
        echo "Ristkulik";
        echo '<img src="https://tse3.mm.bing.net/th/id/OIP.rJ6GtxIj1CU95_WsSf-QdgAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="">';
    }
} else {
}        
//3 Vanus, korras
if (!empty($_GET['q1']) && !empty($_GET['q2'])) {
    $vanus1 = $_GET['q1'];
    $vanus2 = $_GET['q2']; 
if ($vanus1 > $vanus2){
        echo "Esimene on vanem";
    } elseif ($vanus1 < $vanus2) {
        echo "Teine on vanem";
    } elseif ($vanus1 == $vanus2) {
        echo "Vanused on vordsed";
    } else {
        echo "WAS?";
}   
}
// 2 Jagamine, nulliga ei saa jagada ei toota
//if (!empty($_GET['a1']) && !empty($_GET['a2'])) {
if (isset($_GET['a1']) && isset($_GET['b2'])) {
    $arv1 = $_GET['a1'];
    $arv2 = $_GET['a2'];
	$jagamine = $arv1 / $arv2;
    if ($arv2 = 0) {
        echo "ei saa jagada nulliga";
    } else {
        echo "vastus on " . $jagamine;
    }

}
*/
?>
<form action="">
punktid1 <input type="number" name="u1"><br>
<input type="submit" value="arvuta"><br><br>

synniaasta1 <input type="number" name="g1"><br>
aasta2 <input type="number" name="g2"><br>
<input type="submit" value="arvuta"><br><br>

vaartus1 <input type="number" name="s1"><br>
vaartus2 <input type="number" name="s2"><br>
<input type="submit" value="arvuta"><br><br>

arv1 <input type="number" name="a1"><br>
arv2 <input type="number" name="a2"><br>
<input type="submit" value="arvuta"><br><br>

vanus1 <input type="number" name="q1"><br>
vanus2 <input type="number" name="q2"><br>
<input type="submit" value="arvuta">
</form>
</body>
</html>
