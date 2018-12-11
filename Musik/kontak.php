<!doctype html>
<head>
<meta charset="utf-8">
<title>kontak</title>
<link rel="shortcut icon" type="image/x-icon" href="images/musik bagus.ico" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>Kontak</h2>
<?php
error_reporting(0);
include"config/koneksi.php";
$sql="SELECT * FROM tb_kontak";
$result=mysql_query($sql) or die ("kesalahan pada Perintah SQL!");

while ($row=mysql_fetch_object($result)){
	$tanggal=$row->tanggal;
	$nama=$row->nama;
	$alamat=$row->alamat;
	$email=$row->email;
	$telepon=$row->telepon;
	$gambar=$row->gambar;
?>
<div class="post">
<img src="foto/kontak/<?php echo"$gambar";?>" width="170" height="150"></td><td>
<h2><font size="-1">Tanggal : <?php echo"$tanggal"; ?></font>
<h2><font size="-1">Nama : <?php echo"$nama"; ?><br></font>
<h2><font size="-1">Alamat : <?php echo"$alamat"; ?><br></font>
<h2><font size="-1">E-Mail : <?php echo"$email"; ?><br></font>
<h2><font size="-1">Telepon : <?php echo"$telepon"; ?><br></font>
</h2>
<hr color="#000000" width="400" align="center">
<?php } ?>
</div>
</body>
</html>