<?php

include("config.php");

if (isset($_POST['input'])) {
    $jurusan = $_POST['jurusan'];
    $kampus = $_POST['kampus'];

$sql = "INSERT INTO tbstudi (jurusan, kampus) VALUE ('$jurusan', '$kampus')";
$query = mysqli_query($db, $sql);

if ($query) {
    header('Location: index2.php?status=sukses');
} else{
    header('Location: index2.php?status=gagal');
}
} else{
    die("Akses DILARANG !!!");
}
?>