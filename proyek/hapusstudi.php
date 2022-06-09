<?php 

include("config.php");

if (isset($_GET['idstudi'])) {
    $id = $_GET['idstudi'];

    $sql = "DELETE FROM tbstudi WHERE idstudi=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
       header('Location: liststudi.php');
    } else {
        die("Gagal menghapus");
    }

} else {
    die("Akses DILARANG!!!");
}
?>