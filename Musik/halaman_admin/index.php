   <?php session_start();
if(ISSET($_SESSION['username'])){
include"../config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN ADMIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/admin.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
<div id="header">
<div id="logo">
<img src="images/logo.png">
</div>
<div class="clear"></div><a href="logout.php">Logout</a>
</div>
<div id="menu">
            <a class="left" href="form_lihat.php"><img src="images/home.png">Lihat Data</a>
            <a class="center" href="formIn.php"><img src="images/menu5.png">Tambah Data</a>
            <a class="right" href="../index.php" target="_blank"><img src="images/menu4.png">My Website</a>
        </div>
</table>
</div>
<?php
}else{ 
?>
<script language="JavaScript">alert('Anda tidak boleh mengakses halaman ini, Silahkan login dahulu');
document.location=('../login_admin/login.html')</script>
<?php 
}
?>
</body>
</html>