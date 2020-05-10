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
            <td><span>Hoşgeldiniz</span></td>
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
                <input type="hidden" name="submit_cikis" value="2">
                <button type="submit"><a href="cikis.php">Çıkış Yap</a></button>
            </td>
        </tr>
</table>
</form>
</div>
</body>
</html>

