<?php
include"../config/koneksi.php";
include"liblary.php";

$TxtIdH	=$_POST['TxtIdH'];
$TxtJudul =$_POST['TxtJudul'];
$TxtId =$_POST['TxtId'];
$TxtBerita=$_POST['TxtBerita'];
$TxtPengirim=$_POST['TxtPengirim'];

if(empty($TxtIdH)){
?><script language="JavaScript">alert('Kode Id yang diubah kosong !');
document.location=('../halaman_admin/NewsFmEd.php')</script>
<?php
}
else if(empty($TxtJudul)){
?><script language="JavaScript">alert('Data Judul masih kosong !');
document.location=('../halaman_admin/NewsFmEd.php')</script>
<?php
}
else if(empty($TxtPengirim)){
?><script language="JavaScript">alert('Data Pengirim masih kosong !');
document.location=('../halaman_admin/NewsFmEd.php')</script>
<?php
}
else if(empty($TxtBerita)){
?><script language="JavaScript">alert('Data Berita masih kosong !');
document.location=('../halaman_admin/NewsFmEd.php')</script>
<?php
}
else{
	//Perintah Update data
	$sql_ubah="UPDATE tb_berita SET
				judul='$TxtJudul',
				isi_berita='$TxtBerita',
				pengirim='$TxtPengirim'
				
			WHERE id_berita='$TxtIdH'";
			
		mysql_query($sql_ubah,$conn)
						or die ("Perubahan data gagal".mysql_error());
		?><script language="JavaScript">alert('Data Berhasil diubah !');
document.location=('../halaman_admin/NewsTampil.php')</script>
<?php
		include "menu.php";
		include "NewsTampil.php";
		exit;
}
?>

