<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>ALUMNI POLMED</title>
	<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
      }
    table {
	  text-align :center;
      border: solid 1px  #000000;
      border-collapse: collapse;
      border-spacing: 0;
      margin: 10px auto 10px auto;
    }
    table thead th {
		text-align :center;
        background-color: #663399;
        border: solid 1px #000000, #000000;
        color: white;
        padding: 10px;

        text-decoration: none;
    }
    table tbody td {
        border: solid 1px  #000000;
        color: black;
        padding: 10px;
    }
    a {
        background-color: #4A2EFA;
          color: white;
          padding: 10px;
          text-decoration: none;
          font-size: 13px;
    }
</style>
</head>
<body>
<header><center>
    <h1>DAFTAR PEKERJAAN ALUMNI POLMED</h1>
</header>
    <nav>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
        <th>No</th>
        <th>PEKERJAAN</th>
        <th>INSTANSI</th>
        <th>JABATAN</th>
        </tr>
    </thead>
 <tbody>
 <?php
 $no=1;
    $sql = "SELECT * FROM tblpekerjaan";
    $query = mysqli_query($db, $sql);
    while($kerja = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$kerja['idkerja']."</td>";
    echo "<td>".$kerja['pekerjaan']."</td>";
    echo "<td>".$kerja['instansi']."</td>";
    echo "<td>".$kerja['jabatan']."</td>";
    echo "</tr>";
}
 ?>
 </tbody>
 </table>
 <p><center>Total: <?php echo mysqli_num_rows($query) ?></p>
 <center><a href="index.php">BERANDA</a>
 </body>
</html>