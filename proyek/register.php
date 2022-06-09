<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if($database->register($username,$password,$nama))
    {
      header('location:login.php');
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <style>
          *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(img/polmed.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
p {
  color: white;
  font-family: 'Open Sans', sans-serif;
  padding-top: 10px;
}

h1 {
  text-align: center;
  padding-left: 100px;
  padding-bottom: 20px;
}

a {
  color: white;
  font-family: 'Open Sans', sans-serif;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #752BEA;
}
.container label{
    text-align: left;
    color: #90caf9;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #752BEA;
    color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    height: 40px;
    padding: 5px 0;
    border: none;
    background-color:#752BEA;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}

        </style>
    </head>

    <body>
        <div class="container">
          <h1>Login</h1>
          <form method="post" action="">
                <label>Username</label><br>
                <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
                <label>Nama</label><br>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                <label>Password</label><br>
                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                <button type="submit" class="btn btn-primary" name="register">Register</button>
                <p> Sudah punya akun?
                <a href="login.php" class="btn btn-success">Login</a>
                </p>
            </form>
        </div>
    </body>
</html>