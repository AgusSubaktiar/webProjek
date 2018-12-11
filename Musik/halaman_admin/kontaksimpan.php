<?php session_start();
include"../config/koneksi.php";
include"liblary.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$TxtNama     =$_POST['TxtNama'];
$TxtAlamat   =$_POST['TxtAlamat'];
$TxtEmail    =$_POST['TxtEmail'];
$TxtTelepon  =$_POST['TxtTelepon'];
$nama_file   =$_FILES['foto']['name'];
$direktori= "../foto/kontak/";
if(!empty($_FILES["foto"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['foto']['type'];
	if($jenis_gambar=="image/jpg" ||$jenis_gambar=="image/jpeg"||$jenis_gambar=="image/gif")
	{
		$foto=$direktori.basename($_FILES['foto']['name']);
if(move_uploaded_file($_FILES['foto']['tmp_name'],$foto)){
	$sql_simpan="INSERT INTO tb_kontak(ID,nama,alamat,email,telepon,gambar,tanggal)
VALUES('','$TxtNama','$TxtAlamat','$TxtEmail','$TxtTelepon','$nama_file','$tgl_sekarang')";

mysql_query($sql_simpan,$conn)
	or die("Memasukan data berita gagal".mysql_error());
	?><script language="JavaScript">alert('Data Berhasil Disimpan !');
document.location=('../halaman_admin/in_kontak.php')</script>
<?php
}else{
echo"<p>GAGAL DIKIRIM</p>";
}
}else{
echo"<p>JENIS GAMBAR YANG ANDA KIRIM SALAH.HARUS .jpg .gif.png</p>";
}
}else{
echo"<p>ANDA BELUM MEMILIH GAMBAR</p>";
}

?>