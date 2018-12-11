<!doctype html>
<head>
<meta charset="utf-8">
<title>komentar</title>
<link rel="shortcut icon" type="image/x-icon" href="images/musik bagus.ico" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>komentar</h2>
<?php
include"config/koneksi.php";	

$id_berita = $tampilin[id_berita];
$sql="SELECT * FROM tb_komentar WHERE status_komentar='T' AND id_berita = ".$id_berita."  order by tanggal desc"; 
$result=mysql_query($sql) or die ("kesalahan pada Perintah SQL!");

while ($row=mysql_fetch_object($result)){
	$nama=$row->nama;
	$email=$row->email;
	$komentar=$row->komentar;
	$tanggal=$row->tanggal;
	$id=$row->id_berita;
?>
<div class="post">
<h2><font size="-1">Nama : <?php echo"$nama"; ?></font>
<h2><font size="-1">Email : <?php echo"$email"; ?></font>
<h2><font size="-1">Komentar : <?php echo"$komentar"; ?><br></font>
<h2><font size="-1">Tanggal : <?php echo"$tanggal"; ?><br></font>
</h2>
<hr color="#000000" width="400" align="left">
<?php } ?>
<br>
<form action="komentar_simpan.php" method="post">
<input type="hidden" value="<?php echo $id_berita;?> "name="id">
Nama:
<input type="text" name="nama"><br>
Email:
<input type="text" name="email"><br>
Komentar:<br>
<textarea type="text" name="komentar"></textarea><br>
<input type="submit" value="Publish">

</div>
</body>
</html>