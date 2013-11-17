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
			<h3>Data Umum</h3>
			<form action="form_geo.php" method="POST">
				<table>
					<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
					<tr>
						<th colspan=3>UMUM</th>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td>:</td>
						<td>
							<select name="provinsi">
								<option value="0">--Pilih Provinsi--</option>
								<?php
									$queri=mysql_query("select *from t_provinsi") or die (mysql_error());
									while($data=mysql_fetch_array($queri)){
									$id_prov=$data[0];
									$nama_prov=$data[1];
									echo "<option value='$id_prov'>".$nama_prov."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Nama WKP</td>
						<td>:</td>
						<td><input type="text"name="name_wkp" required></td>
					</tr>
					<tr>
						<td>Kabupaten</td>
						<td>:</td>
						<td><input type="text"name="kabupaten" required></td>
					</tr>
					<tr>
						<td>Tipe Gunung</td>
						<td>:</td>
						<td>
							<select name="tipe_mount">
								<option value="0">--Pilih Tipe Gunung--</option>
								<?php
									$queri=mysql_query("select *from t_tipegunungapi") or die (mysql_error());
									while($data=mysql_fetch_array($queri)){
										$id_tipe=$data[0];
										$nama_tipe=$data[1];
										$ket=$data[2];
										echo "<option value='$id_tipe'>".$nama_tipe."&nbsp;(".$ket.")</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tanggal Penetapan</td>
						<td>:</td>
						<td><input type="date" name="tgl_penetapan"/></td>
					</tr>
					<tr>
						<td>Peraturan Penetapan</td>
						<td>:</td>
						<td><input type="text" name="per_penetapan"/></td>
					</tr>
					<tr>
						<td>Total Daya Mungkin</td>
						<td>:</td>
						<td><input type="text" name="tot_dayaMungkin"/></td>
					</tr>
					<tr>
						<td>Total Daya Terduga</td>
						<td>:</td>
						<td><input type="text" name="tot_dayaTerduga"/></td>
					</tr>
					<tr>
						<td>Total Daya Terbukti</td>
						<td>:</td>
						<td><input type="text" name="tot_dayaTerbukti"/></td>
					</tr>
					<tr>
						<th colspan=3>KONDISI LAHAN</th>
					</tr>
					<tr>
						<td>Luas Area</td>
						<td>:</td>
						<td><input type="text" name="luas"/></td>
					</tr>
					<tr>
						<td>Lintang</td>
						<td>:</td>
						<td><input type="text" name="lintang(a)"/>&nbsp;-&nbsp;<input type="text" name="lintang(z)"/></td>
					</tr>
					<tr>
						<td>Bujur</td>
						<td>:</td>
						<td><input type="text" name="bujur(a)"/>&nbsp;-&nbsp;<input type="text" name="bujur(z)"/></td>
					</tr>
					<tr>
						<td>Masuk Dalam Kawasan Hutan Lindung</td>
						<td>:</td>
						<td><input type="radio" name="kawasan_hutan" value=1>Ya<br/>
						<input type="radio" name="kawasan_hutan" value=0>Bukan</td>
					</tr>
					<tr>
						<td>Upload Gambar Lahan</td>
						<td>:</td>
						<td><input name="file" type="file" style="cursor:pointer;" /></td>
					</tr>
					<tr>
						<th colspan=3>PERUSAHAAN PENGEMBANG</th>
					</tr>
					<tr>
						<td>Nama Perusahaan Pengembang</td>
						<td>:</td>
						<td>
							<select name="nama_perpeng">
								<option value="0">--Pilih Perusahaan Pengembang--</option>
								<?php
									$queri=mysql_query("select * from t_perusahaan_pengembang") or die (mysql_error());
									while($data=mysql_fetch_array($queri)){
										$id=$data[0];
										$nama=$data[1];
										echo "<option value='$id'>".$nama."</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jumlah Sumur</td>
						<td>:</td>
						<td><input type="text" name="jml_sumur"/></td>
					</tr>
					<tr>
						<td>Jumlah Unit</td>
						<td>:</td>
						<td><input type="text" name="jml_unit"/></td>
					</tr>
					<tr>
						<td>Status Produksi</td>
						<td>:</td>
						<td><input type="text" name="status_prod"/></td>
					</tr>
					<tr>
						<td>Daya</td>
						<td>:</td>
						<td><input type="text" name="daya"/></td>
					</tr>
					<tr>
						<td>Harga Listrik</td>
						<td>:</td>
						<td><input type="text" name="harga_listrik"/></td>
					</tr>
					<tr>
						<td colspan=3><input type="submit" name="lanjut" value="Continue"</td>
					</tr>
				</table>
			</form>
			<a href="data_umum.php">kembali</a>
		</center>
	</body>
</html>