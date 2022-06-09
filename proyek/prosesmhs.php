<?php

include("config.php");

if (isset($_POST['input'])) {
    $nama = $_POST['namamhs'];
    $telp = $_POST['telpmhs'];
    $thn = $_POST['thnmhs'];

$sql = "INSERT INTO tblmahasiswa (namamhs, telpmhs, thnmhs) VALUE ('$nama', '$telp', '$thn')";
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