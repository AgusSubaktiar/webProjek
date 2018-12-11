<?php
include "../config/koneksi.php";
include "liblary.php";
$idubah=$_GET['idubah'];
$sql_news="SELECT tb_berita.*,tbl_kategori.*FROM tb_berita,tbl_kategori WHERE tbl_kategori.id_kategori=tb_berita.id_kategori AND tb_berita.id_berita='$idubah'";
$qry_news=mysql_query($sql_news,$conn)
or die("gagal menampilkan".mysql_error());
$hsl_news=mysql_fetch_array($qry_news);
$data_idberita  =$hsl_news['id_berita'];
$data_judul     =$hsl_news['judul'];
$data_berita    =$hsl_news['isi_berita'];
$data_gambar    =$hsl_news['gambar'];
$data_pengirim  =$hsl_news['pengirim'];
$data_hari      =$hsl_news['hari'];
$data_tanggal   =$hsl_news['tanggal'];
$data_kategori  =$hsl_news['kategori'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ubah Data berita</title>
</head>
<body>
<?php
require_once "index.php";
include "form_lihat.php";
?>

<div id="content">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td width="75%" style="padding-right:20px;">
<div id="body">
<div class="title">Form Ubah Berita</div>
<div class="body">
<form action="NewsFmEdSim.php" method="post" name="form1" target="_self">
<table>
<tr>
<td><b>Judul Berita</b><div class="desc">Masukkan Judul Berita</div></td>
<td>:</td>
<td><input name="TxtJudul" type="text" value="<?php echo"$data_judul";?>" size="50" maxlength="100">
<input name="TxtIdH" type="hidden" value="<?php echo "$data_idberita";?>"></td>
</tr>
<tr>
<td><b>Kategori</b><div class="desc">Pilih kategori</div></td>
<td>:</td>
<td><input name="Txtkategori" type="text" id="Txtkategori" value="<?php echo"$data_kategori";?>" size="50" maxlength="100"></td>
<td><input name="TxtId" type="hidden" id="TxtId" value="<?php echo"$hsl_news[id_kategori]";?>"></td>
</tr>
<tr>
<td><b>Isi Berita</b><div class="desc">Masukkan Isi Berita</div></td>
<td>:</td>
<td><textarea name="TxtBerita" cols="45" rows="5">
<?php echo"$data_berita";?>
</textarea></td>
</tr>
<tr>
<td><b>Pengirim</b><div class="desc">Masukkan Pengirim</div></td>
<td>:</td>
<td><input name="TxtPengirim" type="text" value="<?php echo"$data_pengirim";?>" size="40" maxlength="60"></td>
</tr>
<tr>
<td><b>Tanggal</b><div class="desc">Waktu Posting</div></td>
<td>:</td> <td><?php 
echo "$data_hari-$data_tanggal";?>
</td>
</tr>
<tr>
<td></td>
<td><input name="ubah" type="submit" value="Ubah"></td>
<td><input type="reset" name="gagal" value="Gagal"></td>
</tr>
</table>
</form>
</body>
</html>