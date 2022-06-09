<?php

include("config.php");

if (isset($_POST['input'])) {
    $kerja = $_POST['pekerjaan'];
    $instansi = $_POST['instansi'];
    $jabatan = $_POST['jabatan'];

$sql = "INSERT INTO tblpekerjaan (pekerjaan, instansi, jabatan) VALUE ('$kerja', '$instansi', '$jabatan')";
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