<?php session_start();
session_destroy();
echo "<script>window.alert('Berhasil Keluar');
        window.location=('login.html')</script>";
?>