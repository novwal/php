<?php
$nis = $_GET['id'];
$server = mysqli_connect("localhost", "root", "", "asesmen");

$sql = "DELETE FROM furry WHERE nis = '$nis'";
$query = mysqli_query($server, $sql);

if ($query) {
    echo "Data Terhapus";
    echo "<a href='table.php'> Tampilkan Data</a>";
} else {
    echo "Hapus Gagal: " . mysqli_error($server);
}
?>
