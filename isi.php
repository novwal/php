<?php

$mtk = $_POST['mtk'];
$bahasa = $_POST['bahasa'];
$english = $_POST['english'];
$pipas = $_POST['pipas'];
$pjok = $_POST['pjok'];
$sejarah = $_POST['sejarah'];

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
?>