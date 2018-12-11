<!doctype html>
	<head>
	<title>WebMusik</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/musik bagus.ico" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>News</h2>
<?php
error_reporting(0);
$batas = 4;
$halaman = $_GET['halaman'];
if (empty($halaman))
{
$posisi = 0;
$halaman = 1;
}
else
{
$posisi = ($halaman-1) * $batas;
}
switch($_GET['act'])
{
default:
include "config/koneksi.php";
$q=mysql_query("SELECT * FROM tb_berita order by tanggal desc limit $posisi,$batas");
$no=$posisi+1;
while($tampil=mysql_fetch_array($q)){
?>
<div class="post">
<h2><a href <?php echo "=?url&act=Selanjutnya&data=$tampil[id_berita]>$tampil[judul]"?></a></h2>
<p class="meta"> <?php echo "Written by: $tampil[pengirim] | $tampil[tanggal]";?></p>
<?php
echo "<br><br>".strip_tags(substr($tampil['isi'],0,200))."<b>"." ....."."<br><p align=right><a href=?url&act=Selanjutnya&data=$tampil[id_berita]>&nbsp;Read more</a></b></p><br>";
$no++;
$tampil2 = mysql_query("SELECT * FROM tb_berita");
$jmldata = mysql_num_rows($tampil2);
$jmlhalaman = ceil($jmldata/$batas);

}?></div><?php


//Halaman Previous//
if ($halaman > $jmlhalaman){
	echo "<b><center> Tidak Ada Data Lagi </center></b>";
}

echo "<br><tr>";
echo "<td width=80>";
echo "<div class=\"paging\">";
$file="index.php"; 
if($halaman <= $jmlhalaman){ 
    $previous=$halaman-1; 
    echo "   
          <A HREF=$file?halaman=$previous><< Prev </A>"; 		 
} 
else
{  
    echo "<A HREF=$file?halaman=1>First Page</A></div>"; 
} 
echo "</td>";

//Halaman Next//
echo "<td>";
if($halaman <= $jmlhalaman){ 
    $next=$halaman+1; 
    //NEXT 
	echo "<center><b><font size=\"2\" >Page &nbsp; $halaman &nbsp;  of  &nbsp;$jmlhalaman</center></b></font>";
	echo "</td>";
	echo "<td colspan=3 width=30>";
	echo "<div class=\"pagingnext\">";
    echo " <A HREF=$file?halaman=$next>Next >></A>";
} 
else{  
    echo "&nbsp;</div>"; 
}


case 'Selanjutnya':
if(isset($_GET['data'])){
$dataid=$_GET['data'];
include "config/koneksi.php";
$tampilinsemuanya=mysql_query("SELECT * FROM tb_berita WHERE id_berita = '$dataid'");
if($tampilin =mysql_fetch_array($tampilinsemuanya)){
?> 
<div id="main" class="column">
<div id="recent-news">
<div class="post">
<h2><a href <?php echo "<font color=#003399 size=3><b>$tampilin[judul]</font></b><br>";?></a></h2>
<p class="meta"> <?php echo "Written by:<b><u>$tampilin[pengirim]</u></b> | Tanggal : $tampilin[tanggal] | ";
if($tampilin['id_kategori']==8){
	echo "Kategori : <b><u>POP</u></b><br>";
	}
	elseif($tampilin['id_kategori']==7){
	echo "Kategori : <b><u>Jazz</u></b><br>";
	}
	elseif($tampilin['id_kategori']==9){
	echo "Kategori : <b><u>Rock</u></b><br>";
	}
?><p><img src="foto/berita/<?php echo "$tampilin[gambar]"; ?>" width="500" height="200" />
<?php echo "<p class=gaya>$tampilin[isi_berita]</p><br>";
include "komentar.html";
include "komentar.php";
echo "<a href=javascript:history.go(-1)><p align=\"right\"><input type=\"button\" value=\"Kembali\"></p></a>";
}
}
}
?>
</div>
</div>
</div>
</body>	
</html>
