<?php

echo "<h1>Total harga cat yang pak bambang beli beserta ppn nya!</h1>";
$cat1 = 75000;
$cat2 = 125000;
$cat3 = 250000;

echo "Cat yang kesatu harganya : " . $cat1;
echo "<br>";
echo "Cat yang kedua harganya : " . $cat2;
echo "<br>";
echo "Cat yang ketiga harganya : " . $cat3;
echo "<br>";
echo "<br>";

$total = $cat1 + ($cat2*2) + ($cat3*3);
echo "- Total harga semua cat : " . $total;
echo "<br>";

$ppn = $total * (0.1);
echo "- Pajak ppn : " . $ppn;
