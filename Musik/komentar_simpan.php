<?php session_start();
include"config/koneksi.php";
include"halaman_admin/liblary.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$id=$_POST['id'];
$nama  =$_POST['nama'];
$email     =$_POST['email'];
$komentar =$_POST['komentar'];

$sql_simpan="INSERT INTO tb_komentar(id_komentar,nama,email,komentar,status_komentar,tanggal,id_berita)
VALUES('','$nama','$email','$komentar','F','$tgl_sekarang','$id')";

mysql_query($sql_simpan,$conn)
	or die("Memasukan data kategori gagal".mysql_error());
	   	echo "<script>
eval(\"parent.location='index.php'\");
alert ('Komentar berhasil menunggu Publishing dari admin !');
</script>";
	?>