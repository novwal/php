<?php
$nilai = $_POST['nilai'];

switch (true) {
    case ($nilai >= 90);
    echo "Nilai A";
    break;
    case ($nilai >= 80);
    echo "Nilai B";
    break;
    case ($nilai >= 70);
    echo "Nilai C";
    break;
    case ($nilai < 70);
    echo "Nilai D";
    break;
}
?>