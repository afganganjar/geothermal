<?php
	session_start();
	include "../koneksi.php";
	if(isset($_POST['lanjut'])){
		
		$_SESSION['id_prov']=$_POST['provinsi'];
		$_SESSION['nm_wkp']=$_POST['name_wkp'];
		$_SESSION['kabupaten']=$_POST['kabupaten'];
		$_SESSION['tipe_mount']=$_POST['tipe_mount'];
		$_SESSION['tgl_penetapan']=$_POST['tgl_penetapan'];
		$_SESSION['per_penetapan']=$_POST['per_penetapan'];
		$_SESSION['tot_dayaMungkin']=$_POST['tot_dayaMungkin'];
		$_SESSION['tot_dayaTerduga']=$_POST['tot_dayaTerduga'];
		$_SESSION['tot_dayaTerbukti']=$_POST['tot_dayaMungkin'];
		$_SESSION['luas']=$_POST['luas'];
		$_SESSION['lintang_a']=$_POST['lintang(a)'];
		$_SESSION['lintang_z']=$_POST['lintang(z)'];
		$_SESSION['bujur_a']=$_POST['bujur(a)'];
		$_SESSION['bujur_z']=$_POST['bujur(z)'];
		$_SESSION['kaw_hutan']=$_POST['kawasan_hutan'];
		$_SESSION['nama_perpeng']=$_POST['nama_perpeng'];
		$_SESSION['jml_sumur']=$_POST['jml_sumur'];
		$_SESSION['jml_unit']=$_POST['jml_unit'];
		$_SESSION['stat_prod']=$_POST['status_prod'];
		$_SESSION['daya']=$_POST['daya'];
		$_SESSION['harga_listrik']=$_POST['harga_listrik'];
	
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>
			<h1>Tambah Data WKP</h1>
			<h3>Data Geokimia, Geofisika, Geologi</h3>
			<form action="proses_geo.php" method="POST">
				<table>
					<tr>
						<th colspan=3>Data Geokimia</th>
					</tr>
					<tr>
						<td>Tahun Rilis</td>
						<td>:</td>
						<td><input type="text" name="thn_rilis" required/></td>
					</tr>
					<tr>
						<td>Jenis Analisa</td>
						<td>:</td>
						<td><input type="text" name="jenis_analisa" required/></td>
					</tr>
					<tr>
						<td>Nama Pembuat</td>
						<td>:</td>
						<td><input type="text" name="nama_pembuat" required/></td>
					</tr>
					<tr>
						<td>Sumber Data</td>
						<td>:</td>
						<td><input type="text" name="sumber_data" required/></td>
					</tr>
					<tr>
						<td>Upload Gambar</td>
						<td>:</td>
						<td><input name="file" type="file" style="cursor:pointer;" /></td>
					</tr>
					<tr>
						<th colspan=3>Data Geofisika</th>
					</tr>
					<tr>
						<td>Tahun Rilis</td>
						<td>:</td>
						<td><input type="text" name="thn_rilis2" required/></td>
					</tr>
					<tr>
						<td>Jenis Analisa</td>
						<td>:</td>
						<td><input type="text" name="jenis_analisa2" required/></td>
					</tr>
					<tr>
						<td>Nama Pembuat</td>
						<td>:</td>
						<td><input type="text" name="nama_pembuat2" required/></td>
					</tr>
					<tr>
						<td>Sumber Data</td>
						<td>:</td>
						<td><input type="text" name="sumber_data2" required/></td>
					</tr>
					<tr>
						<td>Upload Gambar</td>
						<td>:</td>
						<td><input name="file" type="file" style="cursor:pointer;" /></td>
					</tr>
					<tr>
						<th colspan=3>Data Geologi</th>
					</tr>
					<tr>
						<td>Tahun Rilis</td>
						<td>:</td>
						<td><input type="text" name="thn_rilis3" required/></td>
					</tr>
					<tr>
						<td>Jenis Gambar</td>
						<td>:</td>
						<td><input type="text" name="jenis_gbr" required/></td>
					</tr>
					<tr>
						<td>Sumber Data</td>
						<td>:</td>
						<td><input type="text" name="sumber_data3" required/></td>
					</tr>
					<tr>
						<td>Upload Gambar</td>
						<td>:</td>
						<td><input name="file" type="file" style="cursor:pointer;" /></td>
					</tr>
					
					<tr>
						<th colspan=3>Model Konseptual</th>
					</tr>
					<tr>
						<td>Tahun Publikasi</td>
						<td>:</td>
						<td><input type="text" name="thn_publikasi" required/></td>
					</tr>
					<tr>
						<td>Nama Pembuat</td>
						<td>:</td>
						<td><input type="text" name="nm_pembuat" required/></td>
					</tr>
					<tr>
						<td>Sumber Literatur</td>
						<td>:</td>
						<td><input type="text" name="sumber_literatur" required/></td>
					</tr>
					<tr>
						<td>Upload Gambar</td>
						<td>:</td>
						<td><input name="file" type="file" style="cursor:pointer;" /></td>
					</tr>
					<tr>
						<td colspan=3><input type="submit" name="simpan" value="Save"/></td>
					</tr>
				</table>
			</form>
			<a href="form_umum.php">kembali</a>
		</center>
	</body>
</html>
<?php
	}else{
		header('location:form_umum.php');
	}
?>