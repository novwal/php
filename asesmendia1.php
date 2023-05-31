<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Masukan Nis Anda</label>
    <input type="text" name="nis"><br><br>
    <label>Masukan Nilai MTK</label>
    <input type="text" name="mtk"><br><br>
    <label>Masukan Nilai Bahasa</label>
    <input type="text" name="bahasa"><br><br>
    <label>Masukan Nilai English</label>
    <input type="text" name="english"><br><br>
    <label>Masukan Nilai Pipas</label>
    <input type="text" name="pipas"><br><br>
    <label>Masukan Nilai PJOK</label>
    <input type="text" name="pjok"><br><br>
    <label>Masukan Nilai Sejarah</label>
    <input type="text" name="sejarah"><br><br>
    <input type="submit" value="Submit">
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] === "POST"){

    $nis = $_POST['nis'];
    $mtk = $_POST['mtk'];
    $bahasa = $_POST['bahasa'];
    $english = $_POST['english'];
    $pipas = $_POST['pipas'];
    $pjok = $_POST['pjok'];
    $sejarah = $_POST['sejarah'];

    $sql = "INSERT INTO `furry`(`nis`, `mtk`, `bahasa`, `english`, `pipas`, `pjok`, `sejarah`) VALUES ('[$nis]','[$mtk]','[$bahasa]','[$english]','[$pipas]','[$pjok]','[$sejarah]')";

    $jumlah = $mtk+$bahasa+$english+$pipas+$pjok+$sejarah;
    echo "Jumlah total nilai : " . $jumlah;
    echo "<br>";
    echo "<br>";

    $total = 6;
    $rata = $jumlah / $total;
    echo "Rata-ratanya : " . $rata;
    
    echo "<br><br>";

    $maksimal = max($mtk, $bahasa, $english, $pipas, $pjok, $sejarah);
    echo "Nilai Max : " . $maksimal;
    echo "<br>";
    $minimal = min($mtk, $bahasa, $sejarah, $pipas, $pjok, $sejarah);
    echo "Nilai Min : " . $minimal;
    echo "<br><br>";

    switch (true){
        case($rata >= 70);
        echo "Nilai C";
        break;
        case($rata >= 80);
        echo "Nilai B";
        break;
        case($rata >= 90);
        echo "Nilai A";
        break;
        case($rata < 70);
        echo "Nilai D";
        break;
        }
    }
    ?>
</body>
</html>