<?php

$server = mysqli_connect("localhost", "root", "", "asesmen");   
$sql = "SELECT * FROM `furry`";
$query = mysqli_query($server,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai</title>
</head>
<body>
    <div class="container">
        <center><h1>Nilai</h1></center>
        <table class="table">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>MTK</th>
                    <th>ENGLISH</th>
                    <th>BAHASA</th>
                    <th>PIPAS</th>
                    <th>PJOK</th>
                    <th>SEJARAH</th>
                    <th>RATA-RATA</th>
                    <th>Hapus Data</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($query) > 0 ): ?>
                <?php while ($data = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $data["nis"]; ?></td>
                    <td><?= $data["mtk"]; ?></td>
                    <td><?= $data["bahasa"]; ?></td>
                    <td><?= $data["english"]; ?></td>
                    <td><?= $data["pipas"]; ?></td>
                    <td><?= $data["pjok"]; ?></td>
                    <td><?= $data["sejarah"]; ?></td>
                    <?php
                    $nis = $data["nis"];
                    $mtk = $data["mtk"];
                    $bahasa = $data["bahasa"];
                    $english = $data["english"];
                    $pipas = $data["pipas"];
                    $pjok = $data["pjok"];
                    $sejarah = $data["sejarah"];
                    $rata = ($mtk + $bahasa + $english + $pipas + $pjok + $sejarah) / 6;
                    ?>
                    <td><?= $rata; ?></td>
                    <td><a href="hapus.php?id=<?= $data['nis'] ?>">hapus</a></td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
