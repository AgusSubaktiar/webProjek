 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Masukan Kontak</title>
<link rel="shortcut icon" type="image/x-icon" href="../images/admin.png" />
</head>
<body>
<?php
require_once "index.php";
include "formIn.php";
?>
<div id="content">
<table border="0" width="90%" cellpadding="0" cellspacing="0" align="right">
<tr valign="top">
<td width="75%" style="padding-right:100px;">
<div id="body">
<div class="title">Form Masukan Kontak</div>
<div class="body">
<form action="kontaksimpan.php" method="post" enctype="multipart/form-data" name="form1" target="_self">
<table>
<tr>
<td><b>Nama</b><div class="desc">Masukkan nama</div></td>
<td>:</td>
<td><input name="TxtNama" type="text" id="TxtNama" size="50" maxlength="100"></td>
</tr>
<tr>
<td><b>Alamat</b><div class="desc">Masukkan Alamat</div></td>
<td>:</td>
<td><input name="TxtAlamat" type="text" id+"TxtAlamat" size="50" maxlength="100"></td>
</tr>
<tr>
<td><b>Email</b><div class="desc">Masukkan Email</div></td>
<td>:</td>
<td><input name="TxtEmail" type="text" id+"TxtEmail" size="50" maxlength="100"></td>
</tr>
<tr>
<td></td>
<tr>
<td><b>Telepon</b><div class="desc">Masukkan Telepon</div></td>
<td>:</td>
<td><input name="TxtTelepon" type="text" id="TxtTelepon" size="50" maxlength="100"></td></td>
</tr>
<tr>
<td><b>Gambar</b><div class="desc">Gambar</div></td>
<td>:</td>
<td><input name="foto" type="file" size="40"></td>
</tr>
<td><input name="simpan" type="submit" id="simpan" value="Simpan">
<input type="reset" name="gagal" value="Batal"></td>
</tr>
</table>
</form>
</body>
</html>