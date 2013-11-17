<?php
	include "../koneksi.php";
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$queri=mysql_query("select *from t_wkp where id_wkp=$id") or die (mysql_error());
		$data=mysql_fetch_array($queri);
		$id_prov=$data[2];
		$tp_gun=$data[9];
		$id_perpeng=$data[16];
	
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Update Data WKP</h1>
		<form action="#" method="POST">
			<table>
				<tr>
					<td>Provinsi</td>
					<td>:</td>
					<td>
						<select name="provinsi">
							<option value="0">-- Pilih Provinsi --</option>
							<?php
								$queri2=mysql_query("select * from t_provinsi") or die(mysql_error());
								
								while($data2=mysql_fetch_array($queri2)){
									$id_provinsi=$data2[0];
									$nm_provinsi=$data2[1];
									if($id_provinsi==$id_prov){
										echo "<option value='$id_prov' selected>".$nm_provinsi."</option>";
									}else{
										echo "<option value='$id_prov'>".$nm_provinsi."</option>";
									}
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Nama WKP</td>
					<td>:</td>
					<td><input type="text" name="nm_wkp" value=<?php echo $data[1]?> /></td>
				</tr>
				<tr>
					<td>Kabupaten</td>
					<td>:</td>
					<td><input type="text" name="kabupaten" value=<?php echo $data[3]?> /></td>
				</tr>
				<tr>
					<td>Tipe Gunung</td>
					<td>:</td>
					<td>
						<select name="tipe_mount">
								<option value="0">--Pilih Tipe Gunung--</option>
								<?php
									$queri3=mysql_query("select *from t_tipegunungapi") or die (mysql_error());
									while($data3=mysql_fetch_array($queri3)){
										$id_tipe=$data3[0];
										$nama_tipe=$data3[1];
										$ket=$data3[2];
										if($tp_gun==$id_tipe){
											echo "<option value='$id_tipe' selected>".$nama_tipe."&nbsp;(".$ket.")</option>";
										}else{
											echo "<option value='$id_tipe'>".$nama_tipe."&nbsp;(".$ket.")</option>";
										}
									}
								?>
							</select>
					</td>
				</tr>
				<tr>
					<td>Tanggal Penetapan</td>
					<td>:</td>
					<td><input type="date" name="tgl_penetapan" value=<?php echo $data[10]; ?> /></td>
				</tr>
				<tr>
					<td>Peraturan Penetapan</td>
					<td>:</td>
					<td><input type="text" name="per_penetapan" value=<?php echo $data[11]; ?> /></td>
				</tr>
					<tr>
						<td>Total Daya Mungkin</td>
						<td>:</td>
						<td><input type="text" name="tot_dayaMungkin" value=<?php echo $data[12]; ?> /></td>
					</tr>
					<tr>
						<td>Total Daya Terduga</td>
						<td>:</td>
						<td><input type="text" name="tot_dayaTerduga" value=<?php echo $data[13]; ?> /></td>
					</tr>
					<tr>
						<td>Total Daya Terbukti</td>
						<td>:</td>
						<td><input type="text" name="tot_dayaTerbukti" value=<?php echo $data[14]; ?> /></td>
					</tr>
					<tr>
						<td>Luas Area</td>
						<td>:</td>
						<td><input type="text" name="luas" value=<?php echo $data[4]; ?> /></td>
					</tr>
					<tr>
						<td>Lintang</td>
						<td>:</td>
						<td><input type="text" name="lintang(a)" value=<?php echo $data[5]; ?> />&nbsp;-&nbsp;<input type="text" name="lintang(z)" value=<?php echo $data[6]; ?> /></td>
					</tr>
					<tr>
						<td>Bujur</td>
						<td>:</td>
						<td><input type="text" name="bujur(a)" value=<?php echo $data[7]; ?> />&nbsp;-&nbsp;<input type="text" name="bujur(z)" value=<?php echo $data[8]; ?> /></td>
					</tr>
					<tr>
						<td>Masuk Dalam Kawasan Hutan Lindung</td>
						<td>:</td>
						<td>
						<?php
							if($data[15]==1){
						?>
								<input type="radio" name="kawasan_hutan" value=1 checked>Ya<br/>
								<input type="radio" name="kawasan_hutan" value=1>Tidak</td>
						<?php
							}else{
						?>
								<input type="radio" name="kawasan_hutan" value=1>Ya<br/>
								<input type="radio" name="kawasan_hutan" value=0 checked>Bukan</td>
						<?php
							}
						?>
					</tr>
					<tr>
						<td>Nama Perusahaan Pengembang</td>
						<td>:</td>
						<td>
							<select name="nama_perpeng">
								<option value="0">--Pilih Perusahaan Pengembang--</option>
								<?php
									$queri4=mysql_query("select * from t_perusahaan_pengembang") or die (mysql_error());
									while($data4=mysql_fetch_array($queri4)){
										$id_pp=$data4[0];
										$nama_pp=$data4[1];
										if($id_perpeng==$id_pp){
											echo "<option value='$id_pp' selected>".$nama_pp."</option>";
										}else{
											echo "<option value='$id_pp'>".$nama_pp."</option>";
										}
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jumlah Sumur</td>
						<td>:</td>
						<td><input type="text" name="jml_sumur" value=<?php echo $data[18];?> /></td>
					</tr>
					<tr>
						<td colspan=3><input type="submit" name="simpan" value="Save"</td>
					</tr>
			</table>
		</form>
	</body>
</html>
<?php
	}else{
		header('location:data_umum.php');
	}
?>