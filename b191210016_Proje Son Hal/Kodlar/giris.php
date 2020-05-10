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
    <link rel="stylesheet" type="text/css" href="css/giris.css">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <title>Ersin Köseoğlu B191210016</title>
</head>
<body>
<div class="container"> 
<form  method="post">
<table background="resimler/loginbackground.jpg">
    <tr>
        <th>
            Kullanıcı Girişi
        </th>
    </tr>
    <tr>
        <td>
        <?php

            if (isset($_POST['submit'])){

                $kullanici_adi = $_POST['kullanici_adi'];
                $sifre = $_POST['sifre'];

                if (!$kullanici_adi || !$sifre){
                    $hata = 'Lütfen kullanıcı adı ya da şifrenizi girin.';
                } elseif ($kullanici_adi != $uye['kullanici_adi']){
                    $hata = 'Kullanıcı adınız hatalı.';
                } elseif ($sifre != $uye['sifre']){
                    $hata = 'Şifreniz hatalı.';
                } else {

                    $_SESSION['zaman'] = time() + 10;
                    $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
                    // header()
                    header('Location:/Web Teknolojileri Proje/Kodlar');
                    

                }

            }

        ?>
        <?php if (isset($hata)): ?>
            <div style="border: 1px solid red">
                <?php echo $hata; ?>
            </div>
        <?php endif; ?>
        </td>
    </tr>
        <tr>
            <td>
                Kullanıcı adı:
                <input type="text" name="kullanici_adi">    
            </td>
        </tr>
        <tr>
            <td>
                Şifre:
                <input type="password" name="sifre">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="submit" value="1">
                <button type="submit">Giriş Yap</button>
            </td>
        </tr>
</table>
</form>
</div>
</body>
</html>

