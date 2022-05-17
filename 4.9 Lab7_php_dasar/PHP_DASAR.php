<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP (dasar)</title>
</head>
<body>

<!-- UTAMA -->
    <h1>Memulai Belajar PHP</h1>
    <?php
        echo "hallo semua" ;
    ?>
    <br>

<!-- VARIABLE -->
    <h1>Menggunakan Variable</h1>
    <?php
    $nim = "312010308" ;
    $nama = "Anshar Rahmawan" ;
    echo "NIM : " . $nim . "<br>";
    echo "NAMA : " . $nama ."<br>";
    ?>

<!-- PREDEFINE VARIABLE $_GET -->
<br>
    <?php
    echo 'slamat datang' . @$_GET['nama'] ;
    ?>










    
</body>
</html>