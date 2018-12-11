<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Masukan data news</title>
<link rel="shortcut icon" type="image/x-icon" href="../images/admin.png" />
</head>
<body>
<?php
require_once "index.php";
include "formIn.php";
?>
<div id="content">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr valign="top">
<td width="75%" style="padding-right:20px;">
<div id="body">
<div class="title">Form Masukan Berita</div>
<div class="body">
<form action="NewsFmInSim.php" method="post" enctype="multipart/form-data" name="form1" target="_self">
<table>
<tr>
<td><b>Judul Berita</b><div class="desc">Masukkan Judul Berita</div></td>
<td>:</td>
<td><input name="TxtJudul" type="text" id="TxtJudul" size="50" maxlength="100"></td>
</tr>
<tr>
<td><b>Kategori</b><div class="desc">Pilih kategori</div></td>
<td>:</td>
<td>
<select name="cmdkategori" id="cmdkategori">
<?php
include "../config/koneksi.php";
echo "<option value=not_kategori>----Pilih Kategory-----</option>";
$minta="SELECT*FROM tbl_kategori order by kategori";
$eksekusi=mysql_query($minta);
while($hasil=mysql_fetch_array($eksekusi))
{
	$id=$hasil['id_kategori'];
	echo "<option value=$hasil[id_kategori]>$hasil[kategori]</option>";
}
?>
</select>
<input name="hd_id" type="hidden" id="hd_id" value="<?php echo"$id";?>">
</td>
</tr>
<tr>
<td><b>Isi Berita</b><div class="desc">Masukkan Isi Berita</div></td>
<td>:</td>
<td><textarea name="TxtBerita" rows="7" cols="51"> </textarea></td>
</tr>
<tr>
<td><b>Gambar</b><div class="desc">Masukkan Gambar</div></td>
<td>:</td>
<td><input name="foto" type="file" size="40"></td></td>
</tr>
<tr>
<td></td>
<tr>
<td><b>Pengirim</b><div class="desc">Masukkan Pengirim</div></td>
<td>:</td>
<td><input name="TxtPengirim" type="text" id="TxtPengirim" size="50" maxlength="100"></td></td>
</tr>
<td><input name="simpan" type="submit" id="simpan" value="Simpan">
<input type="reset" name="gagal" value="Batal"></td>
</tr>
</table>
</form>
</body>
</html>