<?php
session_start();
if(isset($_SESSION['username'])) {
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=login.php"/>
    <center><h2>Berhasil Logout</h2>kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    <center>&copy<a href="https://codeload.github.com/soden46/form-login-gradien/zip/refs/heads/main">link github pemilik</a></center>
    <center>&copy<a href="htts://syarifsoden.blogspot.com">Syarifsoden</a></center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=login.php"/>
    <center><h2>Gagal Logout</h2>Silahkan login terlebih dahulu<br/><br/>kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    
    <center>&copy<a href="https://codeload.github.com/soden46/form-login-gradien/zip/refs/heads/main">link github </a></center>
    <center>&copy<a href="htts://syarifsoden.blogspot.com">Syarifsoden</a></center>
    <?php
}
?>