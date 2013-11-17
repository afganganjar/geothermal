<?php
	include "../koneksi.php";
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>
		<script src="../jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="../js/raphael-min.js"></script>
		<script src="../js/map.js"></script>
		<style>
			
		</style>
	</head>
	<body>
		<br/>
		<br/>
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">Geothermal Indonesia</a></h1>
				<span>Geothermal Lab. ITB</a>.</span>
			</div>
		</div>
		<div id="content">
			<div id="menu-wrapper">
				<div id='menu'>
					<ul>
						<li><a id='klikdetail' href="data_umum.php"><span>Data Umum</span></a></li>
						<li><a id='klikgeokimia' href='data_geokimia.php'><span>Data Geokimia</span></a></li>
						<li><a id='klikgeo' href='data_geofisika.php'><span>Data Geofisika</span></a></li>
						<li><a id='klikgeo2' href='data_geologi.php'><span>Data Geologi</span></a></li>
						<li><a id='klikmodel' href='model_konseptual.php'><span>Data Model Konseptual</span></a></li>
					</ul>	
				</div>
			</div>
			<div id="data">
			</div>
		</div>
		<center>
			<a href="form_umum.php">Tambah Data</a>
			<a href="logout.php">Logout</a>
		</center>
	</body>
		
</html>