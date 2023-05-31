
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
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
class Nilai {
    private $nis;
    private $mtk;
    private $bahasa;
    private $english;
    private $pipas;
    private $pjok;
    private $sejarah;

    public function __construct($nis, $mtk, $bahasa, $english, $pipas, $pjok, $sejarah) {
        $this->nis = $nis;
        $this->mtk = $mtk;
        $this->bahasa = $bahasa;
        $this->english = $english;
        $this->pipas = $pipas;
        $this->pjok = $pjok;
        $this->sejarah = $sejarah;
    }

    public function getTotal() {
        return $this->mtk + $this->bahasa + $this->english + $this->pipas + $this->pjok + $this->sejarah;
    }

    public function getAverage() {
        $total = 6;
        return $this->getTotal() / $total;
    }

    public function getMax() {
        return max($this->mtk, $this->bahasa, $this->english, $this->pipas, $this->pjok, $this->sejarah);
    }

    public function getMin() {
        return min($this->mtk, $this->bahasa, $this->english, $this->pipas, $this->pjok, $this->sejarah);
    }

    public function getGrade() {
        $rata = $this->getAverage();
        if ($rata >= 90) {
            return "Nilai A";
        } elseif ($rata >= 80) {
            return "Nilai B";
        } elseif ($rata >= 70) {
            return "Nilai C";
        } else {
            return "Nilai D";
        }
    }
}

include "server.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $nis = $_POST['nis'];
    $mtk = $_POST['mtk'];
    $bahasa = $_POST['bahasa'];
    $english = $_POST['english'];
    $pipas = $_POST['pipas'];
    $pjok = $_POST['pjok'];
    $sejarah = $_POST['sejarah'];

    $nilai = new Nilai($nis, $mtk, $bahasa, $english, $pipas, $pjok, $sejarah);

    $sql = "INSERT INTO `furry`(`nis`, `mtk`, `bahasa`, `english`, `pipas`, `pjok`, `sejarah`) VALUES ('$nis','$mtk','$bahasa','$english','$pipas','$pjok','$sejarah')";
    $hasil = mysqli_query($server, $sql);

    echo "Jumlah total nilai : " . $nilai->getTotal();
    echo "<br><br>";

    echo "Rata-ratanya : " . $nilai->getAverage();
    echo "<br><br>";

    echo "Nilai Max : " . $nilai->getMax();
    echo "<br>";
    echo "Nilai Min : " . $nilai->getMin();
    echo "<br><br>";

    echo $nilai->getGrade();

    echo "<hr><hr>";
    echo "<a href='table.php'>Lihat Tabel Nilai Anda</a>";
    echo "<br/>";
    echo "<a 'hapus.php'>Hapus Nilai</a>";
}

?>  