<?php
	include "../koneksi.php";
	
	if(isset($_GET['id_wkp'])){
		$id_wkp = $_GET['id_wkp'];
		
		//table wkp
		$sqlwkp = mysql_query("select * from t_wkp where id_wkp = '$id_wkp'") or die (mysql_error());
		$datawkp = mysql_fetch_array($sqlwkp);
		
		//table dominasi uap
		$sqluap = mysql_query("select * from t_dominasi_uap where id_wkp = '$id_wkp'") or die (mysql_error());
		$datauap = mysql_fetch_array($sqluap);
		
		//table tahapan wkp
		$sqltahapan = mysql_query("select * from t_tahapan_wkp where id_wkp = '$id_wkp'") or die (mysql_error());
		$datatahapan = mysql_fetch_array($sqltahapan);
?>
<html>
	<head>
		<title>Detail WKP</title>
	
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<script src="../jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
		<script src="../js/raphael-min.js"></script>
		
		<script src="../lightbox/js/modernizr.custom.js"></script>

		<link rel="stylesheet" href="../lightbox/css/screen.css" media="screen"/>
		<link rel="stylesheet" href="../lightbox/css/lightbox.css" media="screen"/>

	</head>
<body>
	</br>
	</br>
	<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Geothermal Indonesia</a></h1>
		<span>Geothermal Lab. ITB</a>.</span>
	</div>
	</div>
	</br>
	
	<div id="menu-wrapper">
	<div id="menu" class="container">
			<ul>
				<!--<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>-->
				
				<li><a href="../index.php" accesskey="1" title="">Home</a></li>
				<li><a href="#" accesskey="2" title="">Database</a></li>
				<li><a href="#" accesskey="3" title="">Forum</a></li>
				<li><a href="#" accesskey="4" title="">Edukasi</a></li>
				<li><a href="#" accesskey="5" title="">Tentang Kita</a></li>
				<li><a href="../login/login.php" accesskey="5" title="">Login</a></li>
				
			</ul>
		</div>
		</div>
	<!---header-->
	<div id="content">
		
		
		<div id="top_info">
			<p><?php echo $datawkp['lintang(a)']." LS - ".$datawkp['lintang(z)']." LS / ".$datawkp['bujur(a)']." BT - ".$datawkp['bujur(z)']." BT"?></span><br />
			<b>Koordinat</b></p>
			
			<!----Gambar Wilayah--->
			<img src=""/>
			</br>
			<p id="estimasi"><b>Estimasi Potensi : <?php echo $datawkp['estimasi_potensi'];?> MWe</b></p>
		</div>
		
		<div id="logo">
			<div class="lingkaran">			
				<!---nama wilayah-->
				<h1><?php echo $datawkp['wkp'];?></a></h1><br>
				
				<!--Derajat-->
				<h2><?php echo $datauap['batas_bawah']," C - ".$datauap['batas_atas'];?> C</h1>
				<img src="../images/lingkaran.png">
			</div>
			
			</br>
			
			<!---uap-->
			<p id="slogan"><b>Dominasi Uap</b></p>
			<div id="pasewkp">
				<img src="../images/tahap/tahap_1.png" style="opacity: 0.5"  id="gambar-1"/>
				<img src="../images/tahap/tahap_2.png" style="opacity: 0.5"  id="gambar-2"/>
				<img src="../images/tahap/tahap_3.png" style="opacity: 0.5"  id="gambar-3"/>
				<img src="../images/tahap/tahap_4.png" style="opacity: 0.5"  id="gambar-4"/>
				<img src="../images/tahap/tahap_5.png" style="opacity: 0.5"  id="gambar-5"/>
			</div>
			<!-- nilai taahapan-->
			<input type="hidden" value="<?php echo $datatahapan['tahap']?>" id="test">
			<!-- id_wkp-->
			<input type="hidden" value="<?php echo $id_wkp?>" id="id_wkp">
		</div>
		
		</br>
		
		<div id='cssmenu'>
			<ul>
				<li><a id='klikdetail' href=""><span>Data Umum</span></a></li>
				<li><a id='klikgeokimia' href=''><span>Data Geokimia</span></a></li>
				<li><a id='klikgeo' href=''><span>Data Geofisika dan Geologi</span></a></li>
				<li><a id='klikmodel' href=''><span>Data Model Konseptual</span></a></li>
			</ul>	
		</div>
		<div id='page-bahasan'>
		</div>
		<!---<button>Yup saya punya data baru!</button>-->

</div> <!---nutup div content -->
</body>
		<script src="../lightbox/js/jquery-1.10.2.min.js"></script>
		<script src="../lightbox/js/lightbox-2.6.min.js"></script>
		<script type= "text/javascript">	
			window.onload = function () {
				(function () {
					var tahap = document.getElementById('test').value;
					if (tahap) {
						for(var i = 1 ; i <= tahap; i++){
							document.getElementById("gambar-"+i).style.opacity = 1;
						}
					}
					else {
						setTimeout(arguments.callee, 50); // call myself again in 50 msecs
					}
				}());
			};
			
			var id_wkp = document.getElementById("id_wkp").value;
			
			
			$("#page-bahasan").load('detail.php?id_wkp='+id_wkp);
			$("#klikdetail").click(function() {
				 $('#page-bahasan').load('detail.php?id_wkp='+id_wkp);
				 document.getElementById("klikdetail").element.setattribute = "active";
				 return false;
			});
			
			$("#klikgeokimia").click(function() {
				 $('#page-bahasan').load('geokimia.php?id_wkp='+id_wkp);
				 return false;
			});
			
			$("#klikgeo").click(function() {
				 $('#page-bahasan').load('geo.php?id_wkp='+id_wkp);
				 return false;
			});
			
			$("#klikmodel").click(function() {
				 $('#page-bahasan').load('model.php?id_wkp='+id_wkp);
				 return false;
			});
		</script>
</html>

<?php
	}else{
		header('Location:../index.php');
	}
?>