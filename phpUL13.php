<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        img{
            width:150px;
            margin:10px;
        }
    </style>
</head>
<body>
<?php
if(!empty($_FILES['minu_fail']['name'])){
    $sinu_faili_nimi = $_FILES['minu_fail']['name'];
    $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
    $faili_suurus = $_FILES['minu_fail']['size'];
    $max_suurus = 10485760;
    $faili_tyyp = $_FILES['minu_fail']['type'];
    if($faili_suurus <= $max_suurus && $faili_tyyp=='image/jpeg'){
        $kataloog = 'pildid';
        if(!is_dir($kataloog)){
            mkdir($kataloog);
        }
        $faili_koht = $kataloog.'/'.$sinu_faili_nimi;
        if(!file_exists($faili_koht) && move_uploaded_file($ajutine_fail, $faili_koht)){
            echo 'edukas<br>';	
        } else {
            echo 'ebaonnestus<br>';
        }

    } else {
        echo 'ei laetud<br>';	
    }
}
$kataloog = 'pildid';
if(is_dir($kataloog)){
    $failid = scandir($kataloog);
    foreach($failid as $fail){
        if($fail != '.' && $fail != '..'){
            echo '<a href="'.$kataloog.'/'.$fail.'" target="_blank">';
            echo '<img src="'.$kataloog.'/'.$fail.'" alt="">';
            echo '</a>';
        }
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="minu_fail"><br>
    <input type="submit" value="Lae üles!">
</form>
</body>
</html>