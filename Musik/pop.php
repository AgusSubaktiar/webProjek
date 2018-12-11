<!doctype html>
<head>
<title>WebMusik</title>
<link rel="shortcut icon" type="image/x-icon" href="images/musik bagus.ico" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h2>NEWS Pop</h2>
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
$q=mysql_query("SELECT * FROM tb_berita order by id_kategori = '8' desc limit $posisi,$batas");
$no=$posisi+1;
while($tampil=mysql_fetch_array($q)){
?>
<div id="recent-news">
<div class="post"><?php
echo "<a href=?url&act=Selanjutnya&data=$tampil[id_berita]></b></a>";?>
<h2><a href <?php echo "<font color=#003399 size=3><b>$tampil[judul]</font></b><br>";?></a></h2>
<p class="meta"> <?php echo "Written by:<b><u>$tampil[pengirim]</u></b> | Tanggal : $tampil[tanggal] | ";
?>
<p><img src="foto/berita/<?php echo "$tampil[gambar]"; ?>" width="500" height="200" />
<?php
echo "<br><br>".strip_tags(substr($tampil['isi_berita'],0,200))."<b>"." ....."."<br><p align=right><a href=?url&act=Selanjutnya&data=$tampil[id_berita]>&nbsp;Read more</a></b></p>";
$no++;
$tampil2 = mysql_query("SELECT * FROM tb_berita");
$jmldata = mysql_num_rows($tampil2);
$jmlhalaman = ceil($jmldata/$batas);
}?>
</div>
<?php

// Paging Halaman Previous//
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

// Halaman Next//
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

//Akhir//
case 'Selanjutnya':
if(isset($_GET['data'])){
$dataid=$_GET['data'];
include "config/koneksi.php";
$tampilinsemuanya=mysql_query("SELECT * FROM tb_berita WHERE id_berita = '$dataid'");
if($tampilindong=mysql_fetch_array($tampilinsemuanya)){
echo "<font color=#003399 size=3><b>$tampilindong[judul]</font></b><br>";
echo "<i>";
echo "Tanggal : $tampilindong[tanggal]";
echo "</i>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<p class=gaya>$tampilindong[isi_berita]</p>";
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