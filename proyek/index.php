<!DOCTYPE html>
<html lang="en">
<head>
    <title>ALUMNI POLMED</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                font-size: 15px;
                font-family: monospace;
                background-image: url('img/polmed.jpg');
                background-size: cover;
                background-attachment: fixed;
                }

            .container{
                width: 80%;
                margin: auto;
                overflow: hidden;
                }

            header{
                background: linear-gradient(to right,#ffffff, #f0f0f0, #660099);
                color: #ffd700;
                padding-top: 5px;
                min-height: 50px;
                border-bottom: 3px solid #663399;
                }

            header .navbar li a {
                display: inline-block;
                color: black;
                text-align: center;
                padding: 20px 16px;
                text-decoration: none;
                }

            .navbar .active a{
                color: black; 
                font-weight: bold;
                }  

            .dropdown:hover .isi-dropdown {
                display: block;
                }
                
            .isi-dropdown {
                position: absolute;
                display: none;
                box-shadow: 0px 8px 16px 0px rgba(6,5,3,0.2);
                z-index: 1;
                background-color: #ffffff;
                }
                
            .isi-dropdown a {
                color: black !important;
                }
 
            ul{
                margin: 0;
                padding: 0;
                }
            .navbar > ul > li {
                float: left;
                }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
<div  class="container">
    <div class="navbar">
        <ul>
            <li class="active"><a href="">Beranda</a></li>
            <li class="dropdown"><a href="#">Lihat Data</a>
                <ul class="isi-dropdown">
                    <li><a href="listmhs1.php">Lihat Data Alumni</a></li>
                    <li><a href="mhsjoinkerja1.php">Lihat Data Alumni dan Pekerjaannya</a></li>
                    <li><a href="mhsjoinstudi1.php">Lihat Data Alumni dan Studi Lanjutannya</a></li>
                </ul>
            <li class="dropdown"><a href="login.php">Login</a>
            </li>
        </ul>
    </div>
</div> 
</body>
</html>