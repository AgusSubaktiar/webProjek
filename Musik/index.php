<!doctype html>
<head>
	<title>WebMusik</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/musik bagus.ico" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
    
</head>
<body>
<nav>
<ul>
<li><a href="?url=berita" class="home">News</a></li>
<li><a href="#">Pop</a>
<ul>
<li><a href="?url=sejarahpop" target="_self">Sejarah</a></li>
</ul>
</li>
<li><a href="#">Jazz</a>
<ul>
<li><a href="?url=sejarahjazz" target="_self">Sejarah</a></li>
</ul>
</li>
<li><a href="#">Rock</a>
<ul>
<li><a href="?url=sejarahrock" target="_self ">Sejarah</a></li>
</ul>
</li>
</nav>
<p>&nbsp;</p>
<div id="container">
<div id="header"><a href="halaman_admin/index.php" target="_blank"><img src="images/admin.png" width="25" height="28" /></a>
<h1>
		    <!--Izul Cyber Cafe-->
</h1>
</a>
<div id="menu">
<ul>
					<li><a href="?url=home" class="current"><span>Home</span></a></li>
					<li><a href="?url=about">About</a></li>
					<li><a href="?url=kontak">Contact</a></li>
</ul>
</div>
</div> 
		<!-- End Header -->
<div id="content">
<div id="sidebar" class="column">
<div class="nav">
<p class="product-title"> <a href="#"></a> </p>
</div>
<div class="product"><p align="center"><?php include "jam.php";?></p>
<p class="product-title"> <a href="#"></a> </p>
</div>
<div class="product">
<p class="product-title"> <a href="#"></a> </p>
</div>
</div> <!-- End Sidebar -->
<div id="main" class="column">
<div class="post">
<?php
error_reporting(0);
	if($_REQUEST['url']==''){
		include"berita.php";
		}
	elseif($_REQUEST['url']=='berita'){
		include"berita.php";
	}
	elseif($_REQUEST['url']=='kontak'){
		include"kontak.php";
	}
	elseif($_REQUEST['url']=='home'){
		include"home.php";
	}
	elseif($_REQUEST['url']=='about'){
		include"about.php";
	}
	elseif($_REQUEST['url']=='sejarahpop'){
		include"sejarahpop.php";
	}
        elseif($_REQUEST['url']=='sejarahjazz'){
		include"sejarahjazz.php";
	}
        elseif($_REQUEST['url']=='sejarahrock'){
		include"sejarahrock.php";
	}
	
	
?>
</div> <!-- End Main -->
</div> <!-- End Content -->
</div>
<div id="footer">
<div id="footer-menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Menus</a></li>
<li><a href="#">Photos</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Blog</a></li>
</ul>
</div> <!-- End Footer Menu -->
</div> <!-- End Footer -->
</div> <!-- End Container -->
	
</body>	
</html>