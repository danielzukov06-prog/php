<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
/*
$poisid = array("Jaan", "Mati", "Karel", "Andres", "Markus");
$tüdrukud = array("Mari", "Liis", "Kati", "Anna", "Evelin");
for ($i = 0; $i < count($poisid); $i++) {
    echo $poisid[$i] . "<br>";
}
for ($i = 0; $i < count($tüdrukud); $i++) {
    echo $tüdrukud[$i] . "<br>";
}
/* Massiivid ja tsüklid
$tydrukud = array('mari', 'kati', 'juhan', 'miku');
$poisid = array('marko', 'tomas', 'jaan', 'uku');
$kogus = count($tydrukud);
for ($i = 0; $i < $kogus; $i++) {
    echo $tydrukud[$i] . ' - ' . $poisid[$i] . '<br>';
}
/*Kolmega jagunevad
for($nr = 3; $nr <= 100; $nr += 3) {
    echo $nr . '<br>';
}
/* Kahanev
for($nr = 10; $nr >= 2; $nr--) {
    echo $nr . '<br>';
}
*/
/* Ruut
    if (isset($_GET['size'])) {
        $size = intval($_GET['size']);
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }
*/
/* Rida II
for($rida=1; $rida<=7; $rida++){ 
	for($veerg=1; $veerg<=1; $veerg++){ 
			echo '*';	
		}
	echo '<br>';
}
*/
/* Rida
for($rida=1; $rida<=1; $rida++){ 
	for($veerg=1; $veerg<=7; $veerg++){ 
			echo '*';	
		}
	echo '<br>';
}
*/
/* Genereeri
for ($i = 1; $i <= 100; $i++) {
    echo $i . ". ";
    if ($i % 10 == 0) {
        echo "<br>";
    }
}
*/
?>
<form method="get">
</form>
</body>
</html>
