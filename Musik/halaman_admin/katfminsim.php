<?php session_start();
include"../config/koneksi.php";
include"liblary.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$TxtKategori  =$_POST['TxtKategori'];

if(empty($TxtKategori)){
?><script language="JavaScript">alert('Data Kategori masih kosong !');
document.location=('../halaman_admin/in_kategori.php')</script>
<?php
}else{
	$sql_simpan="INSERT INTO tbl_kategori(id_kategori,kategori,hari,tanggal)
VALUES('','$TxtKategori','$hari_ini','$tgl_sekarang')";
mysql_query($sql_simpan,$conn)
	or die("Memasukan data kategori gagal".mysql_error());
	?><script language="JavaScript">alert('Data Berhasil Disimpan !');
document.location=('../halaman_admin/in_kategori.php')</script>
<?php
	include"menu_utama.php";

}
?>