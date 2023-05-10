<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <form action="#" method = "post">
        input angka ke 1
        <br>
        <input type="text" name = "angka1" id= "angka1">
        <br>
        input angka ke 2
        <br>
        <input type="text" name = "angka2" id= "angka2">
        <br>
        <input type="submit" name="submit" value="hitung">
    </form>
    
    <?php

    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];

    $hasil = $angka1+$angka2;
    echo $hasil;
    ?>
</body>
</html>