<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<menu>
<a href="index.php">Avaleht</a> |
<a href="index.php?leht=portfoolio">Portfoolio</a> |
<a href="index.php?leht=kaart">Kaart</a> |
<a href="index.php?leht=kontakt">Kontakt</a>
</menu>
<h2>Avaleht</h2>
<p> Lorem ipsum dolor sit amet</p>
<?php
/*
	08 - PHP
	Daniel Žukov
	Haapsalu Kutsehariduskeskus
	20.01.2026
*/
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    if(in_array($leht, $lubatud)){
        include($leht . '.php');
    } else {
        echo "<h2>Valitud lehte ei eksisteeri!</h2>";
    }
} else

?>
<form action="">

</form>
</body>
</html>
