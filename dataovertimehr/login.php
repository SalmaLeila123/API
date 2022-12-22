<?php

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$dbconnect = new mysqli("localhost","root","","overtime");

?>  

<!DOCTYPE HTML>
<html lang="en">
<head>

    <style>
        *{
            margin: 0;
            padding: 0;
            outline: 0;
            font-family: 'Open Sans', sans-serif;
        }
        body{
            height: 100vh;
            background-image: url(assets/img/gedung.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        p {
            color: black;
            font-family: 'Open Sans', sans-serif;
            padding-top: 10px;
        }

        h1 {
            text-align: center;
            padding-left: 100px;
            padding-bottom: 20px;
        }

        a {
            color: blue;
            font-family: 'Open Sans', sans-serif;
        }

        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 80px 100px;
            width: 400px;

            background-color: #B0C4DE;
        }


        .container label{
            text-align: left;
            color:  #000000;
        }
        .container form input{
            width: calc(100% - 20px);
            padding: 20px 10px;
            margin-bottom: 15px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
        }

        .container form select{
            width: calc(100% - 0px);
            padding: 20px 10px;
            margin-bottom: 15px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
        }
        .container form button{
            width: calc(50%);
            height: 60px;
            padding: 5px 0;
            border: none;
            background-color:#1E90FF;
            font-size: 18px;
            color: #fafafa;
            border-radius: 5px;
        }


    </style>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="center">
                <div class="login">
                    <form role="form" action="" method="post">
                        <h2><center>Login Aplikasi</center></h2>
                        <h2><center>Overtime Recapitulation Data</center></h2>
                        <br>
                        <h7><center> PT. Autoplatik Indonesia <center></h7>
                            <br>
                            <br>

                            <div class="form-group">
                                <input type="text" name="username"  class="form-control" placeholder="Masukan Username" required autofocus />
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password" required autofocus />
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-primary btn-block" value="Masuk">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>
        </html>
    </body>
    </html>


    <?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = isset($_POST['login']);

    if ($login) {
        $sql = $dbconnect->query("SELECT * FROM users WHERE username='$username' and password='$password'");
        $ketemu = $sql->num_rows;
        $data = $sql->fetch_assoc();

        if ($ketemu >=1) {

            if ($data['level'] == superadmin) {
                $_SESSION['superadmin'] =$data[id];

                header("location:index.php");
            }
            else if ($data['level'] == admin) {
                $_SESSION['admin'] =$data[id];

                header("location:index2.php");
            }
            else if ($data['level'] == petugas) {
                $_SESSION['petugas'] =$data[id];

                header("location:index3.php");
            }
            else if ($data['level'] == esseiperbama) {
                $_SESSION['esseiperbama'] =$data[id];

                header("location:index4.php");
            }
            else if ($data['level'] == propacific) {
                $_SESSION['propacific'] =$data[id];

                header("location:index5.php");
            }
            else if ($data['level'] == lpkmitraindustri) {
                $_SESSION['lpkmitraindustri'] =$data[id];

                header("location:index6.php");
            }
            else if ($data['level'] == majujayaleksana) {
                $_SESSION['majujayaleksana'] =$data[id];

                header("location:index7.php");
            }
            else if ($data['level'] == lpkmonas) {
                $_SESSION['lpkmonas'] =$data[id];

                header("location:index8.php");
            }
        }
        else {
            echo '<center><div class="alert alert-danger">Upss...!!! Login gagal. Silakan Coba Kembali</div></center>';

        }
    }


    if(!isset($_SESSION['login'])){

    }else{
        header('location:index.php');
    }

    ?>
