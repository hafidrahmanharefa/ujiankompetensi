<?php 

include("config.php");

if (isset($_GET['idkerja'])) {
    $id = $_GET['idkerja'];

    $sql = "DELETE FROM tblpekerjaan WHERE idkerja=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
       header('Location: listkerja.php');
    } else {
        die("Gagal menghapus");
    }

} else {
    die("Akses DILARANG!!!");
}
?>