<?php
	session_start();
	include "../koneksi.php";
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>
			<h1>Tambah Data WKP</h1>
			<h3>Data Geologi</h3>
			<form action="proses_geologi.php" method="POST">
				<table>
					<tr>
						<td>Provinsi</td>
						<td>:</td>
						<td>
							<select name="provinsi">
								<option value=0>--Pilih Provinsi--</option>
								<?php
									$queri=mysql_query("select *from t_provinsi") or die (mysql_error());
									while($data=mysql_fetch_array($queri)){
										$id_prov=$data[0];
										
										echo "<option value='$id_prov'>".$data[1]."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Nama WKP</td>
						<td>:</td>
						<td>
							<select name="name_wkp">
								<option value=0>--Nama WKP--</option>
								<?php
									$queri=mysql_query("select *from t_wkp") or die (mysql_error());
									while($data=mysql_fetch_array($queri)){
										$id_wkp=$data[0];
										
										echo "<option value='$id_wkp'>".$data[1]."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tahun Rilis</td>
						<td>:</td>
						<td><input type="text" name="thn_rilis" required/></td>
					</tr>
					<tr>
						<td>Jenis Gambar</td>
						<td>:</td>
						<td><input type="text" name="jenis_gbr" required/></td>
					</tr>
					<tr>
						<td>Sumber Data</td>
						<td>:</td>
						<td><input type="text" name="sumber_data" required/></td>
					</tr>
					<tr>
						<td colspan=3><input type="submit" name="simpan" value="Save"/></td>
					</tr>
				</table>
			</form>
			<a href="data_geologi.php">kembali</a>
		</center>
	</body>
</html>