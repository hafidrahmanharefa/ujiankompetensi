<?php 

include("config.php");

if (isset($_GET['idmhs'])) {
    $id = $_GET['idmhs'];

    $sql = "DELETE FROM tblmahasiswa WHERE idmhs=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
       header('Location: listmhs.php');
    } else {
        die("Gagal menghapus");
    }

} else {
    die("Akses DILARANG!!!");
}
?>