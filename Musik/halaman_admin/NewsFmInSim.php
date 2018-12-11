<?php session_start();
include"../config/koneksi.php";
include"liblary.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$IDBerita  =$_POST['IDBerita'];
$TxtJudul  =$_POST['TxtJudul'];
$hd_id     =$_POST['hd_id'];
$TxtBerita =$_POST['TxtBerita'];
$TxtPengirim=$_POST['TxtPengirim'];
$kategori	=$_POST['cmdkategori'];
$nama_file   = $_FILES['foto']['name'];
$direktori= "../foto/berita/";
if(!empty($_FILES["foto"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['foto']['type'];
	if($jenis_gambar=="image/jpg" ||$jenis_gambar=="image/jpeg")
	{
	
if(move_uploaded_file($_FILES['foto']['tmp_name'],$nama_file)){
	$sql_simpan="INSERT INTO tb_berita(judul,isi_berita,gambar,pengirim,hari,tanggal,id_kategori)
VALUES('$TxtJudul','$TxtBerita','$nama_file','$TxtPengirim','$hari_ini','$tgl_sekarang','$kategori')";

mysql_query($sql_simpan,$conn)
	or die("Memasukan data berita gagal".mysql_error());
	?><script language="JavaScript">alert('Data Berhasil Disimpan !');
document.location=('../halaman_admin/in_berita.php')</script>
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