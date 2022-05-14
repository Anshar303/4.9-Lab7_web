<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP (dasar)</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method =" post">
        <label> NAMA : </label>
        <input type = 'text' name = "Nama">
        <input type = 'submit' value = 'Send'>
    </form> <br>
    <?php
    echo ' Slamat Datang ' . @$_POST['Nama'] . @ $_GET['Nama'] ;
    ?> <br>
    <!-- pekerjaan OPERATOR -->

    <?php
    $gaji = 10000000 ;
    $pajak = 0.1 ;
    $thp = $gaji - ($gaji * $pajak) ;
    echo 'gaji sebelum pajak = Rp. $gaji <br>' ;
    echo 'gaji yang di bawa pulang = Rp. $thp' ;
    ?>

    <!-- kondisi IF -->
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") 
    {echo "Minggu";} 
    elseif ($nama_hari == "Monday") 
    {echo "Senin";} 
    else 
    {echo "Selasa";}
    ?>
    <!-- KONDISI SWITCH ?? -->
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    ?>

    <!-- PENGUANGAN FOR -->
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) 
    {
        echo "Perulangan ke: " . $i . '<br />';
    }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) 
        {
        echo "Perulangan ke: " . $i . '<br />';
        }
    ?>

    <!-- PENGULANGAN WHILE -->
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) 
    {
    echo "Perulangan ke: " . $i . '<br />';
    $i++; 
    }
    ?>

    <!-- PENGULANGAN DOWHILE -->
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    }   
    while ($i<=10);
    ?>






</body>
</html>