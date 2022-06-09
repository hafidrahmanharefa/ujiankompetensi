<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>ALUMNI POLMED</title>
</head>
<style>
        *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: #663399;
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h3{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #ffffff;
}
.container h4{
    text-align: left;
    color: #ffffff;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #ffffff;
}
.navbar{
  background-color: black;
}
.navbar li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
}
.navbar .active a{background-color:#1abc9c; color: white; font-weight: bold;}  

a:hover{color: white; font-weight: bold; }
.navbar li a:hover{
  background-color: #00eaff;
}

.isi-dropdown {
  position: absolute;
  display: none;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: #663399;
}
 .box-login {
   display: flex;
   justify-content:space-between;
   margin: 10px;
   border-bottom: 2px solid white;
   padding: 8px 0;
 }
 .container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#000000;
    font-size: 18px;
    color: #fafafa;
}
</style>
<body>
<div class="container">
    <header><center>
    <h3>INPUT DATA ALUMNI</h3>
    </header>
    <form action="prosesmhsjoinkerja.php" method="POST" enctype="multipart/form-data">
    <fieldset>

    <div class="box-login">
        				<h4><label for="namamhs">Nama Alumni : </label></h4>
        				<select name="namamhs" id="idmhs" class="form-control">
                            <option value="">-pilih-     
                            <?php  
                            $sqli = mysqli_query($db, "SELECT*FROM tblmahasiswa") or die(mysqli_error($db));
                            while ($data = mysqli_fetch_array($sqli)) {
                                echo '<option value="'.$data['idmhs'].'">'.$data['namamhs'].'</option>';
                            }
                            ?> 
                            </option>      
                        </select>
        			</div>

    <div class="box-login">
    <h4><label for="pekerjaan">PEKERJAAN : </label></h4>
    <input type="text" name="pekerjaan" placeholder="Apa Pekerjaan Anda?" />
    </div>
    
    <div class="box-login">
    <h4><label for="instansi">INSTANSI : </label></h4>
    <input type="text" name="instansi" placeholder="Dimana Anda Bekerja Saat Ini?" />
    </div>

    <div class="box-login">
    <h4><label for="jabatan">JABATAN : </label></h4>
    <input type="text" name="jabatan" placeholder="Apa Jabatan Anda Saat Ini?" />
    </div>
    
    <button><input type="submit" value="INPUT" name="input" /></button>
</form>
</body>
</html>