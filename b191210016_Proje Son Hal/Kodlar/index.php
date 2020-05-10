<?php
session_start();
ob_start();
require 'ayarlar.php';

if (isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){
    session_destroy();
    header('Location:/Web Teknolojileri Proje/Kodlar');
} else {
    $_SESSION['zaman'] = time() + 10;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Web Teknolojileri Proje">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author" content="Ersin Köseoğlu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <title>Ersin Köseoğlu B191210016</title>
</head>
<body background="resimler/arkaplan.png">
<div class="wrapper">
        <header>
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="main.html">Anasayfa</a></li>
                        <li><a href="ozgecmis.html">Özgeçmiş</a></li>
                        <li><a href="sehrim.html">Şehrim</a></li>
                        <li><a href="iletisim.html">Iletişim</a></li>
                        <li><a href="index.php">Giriş</a></li>
                    </ul>
                    <div class="clear"></div>
                </nav>

            </div>
        </header>
</div>
        


    
<?php

    if (isset($_SESSION['kullanici_adi'])){
        include 'admin.php';
    } else {
        include 'giris.php';
    }

?>

</body>
</html>