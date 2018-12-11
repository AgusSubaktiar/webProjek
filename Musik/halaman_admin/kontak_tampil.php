<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tampil data News</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" type="image/x-icon" href="../images/admin.png" />
</head>
<body>
<?php
require_once "index.php";
include "form_lihat.php";
?>
<div id="content">
<table border="0" width="125%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td width="50%" style="padding-right:20px;">
<table class="table" width="81%">
<tr class="th">
<th width="55">Tanggal</th>
<th width="150">Nama</th>
<th width="270">Alamat</th>
<th width="150">Email</th>
<th width="100">No.Telepon</th>
<th width="224">Gambar</th>
<th width="100">Setting</th>
</tr>
<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$foto=$_FILES['foto'];
include_once"../config/koneksi.php";
include_once"liblary.php";
$sql_news="SELECT ID,nama,alamat,email,telepon,gambar,tanggal FROM tb_kontak ORDER BY ID";
$qry_news=mysql_query($sql_news,$conn)
or die("gagal menampilkan".mysql_error());
while($hsl_news=mysql_fetch_array($qry_news)){
?>
<tr class="td" bgcolor="#FFF">
<td width="100" align="center"><?php echo"$hsl_news[tanggal]";?></td>
<td align="center"><?php echo"$hsl_news[nama]";?></td>
<td align="center"><?php echo"$hsl_news[alamat]";?></td>
<td align="center"><?php echo"$hsl_news[email]";?></td>
<td align="center"><?php echo"$hsl_news[telepon]";?></td> 
<td align="center"><img src="../foto/berita/<?php echo"$hsl_news[gambar]";?>" width="50" height="50"> </td>
<td align="center"><a href="NewsHapus.php?idhapus=<?php echo"$hsl_news[id_berita]";?>" 
target="_self"><img src="images/delete.png"></a>
<a href="NewsFmEd.php?idubah=<?php echo"$hsl_news[id_berita]";?>"
target="_self"><img src="images/edit.png"></a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>