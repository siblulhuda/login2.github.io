<?php
    session_start();
    if(isset($_SESSION["username"])){  
    }else{
        echo header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
        <h2>SELAMAT ANDA BERHASIL LOGIN</h2>
        <center>&copy<a href="https://codeload.github.com/soden46/form-login-gradien/zip/refs/heads/main">Referensi link github </a></center>
        <center>&copy<a href="htts://syarifsoden.blogspot.com">Referensi Syarifsoden</a></center>
        <center><a href>Sedikit dimodifikasi oleh Siblul Huda untuk tugas pembelajaran  </a></center>
        <center>&copy<a href="https://siblulhuda.github.io/webs.github.io/">Web Portofolio</a></center>
        <marquee><h2>Good Job!!!</h2></marquee>
        <br>
        <a href="logout.php"><input type="submit" value="Logout"></a>
</div>
</body>
</html>