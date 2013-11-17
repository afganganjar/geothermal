<?php
	include "../koneksi.php";
	
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$queri=mysql_query("select * from t_data_geokimia_geofisika where id_data_geokimia=$id") or die (mysql_error());
		$data=mysql_fetch_array($queri);
		$id_geokim=$data[0];
		$id_wkp=$data[1];
		
		$sql=mysql_query("select * from t_wkp where id_wkp=$id_wkp") or die (mysql_error());
		$data0=mysql_fetch_array($sql);
		$id_prov=$data0[2];

?>
	<html>
		<head>
			<title></title>
		</head>
		<body>
			<h1>Update Data Geokimia</h1>
			<form action="" method="POST">
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
						<td>
							<select name="name_wkp" id="nm_wkp">
								<option value=0>--Nama WKP--</option>
								<?php
									$queri3=mysql_query("select *from t_wkp") or die (mysql_error());
									while($data3=mysql_fetch_array($queri3)){
										$id_wkp2=$data3[0];
										
										if($id_wkp==$id_wkp2){
											echo "<option value='$id_wkp2' selected>".$data3[1]."</option>";
										}else{
											echo "<option value='$id_wkp2'>".$data3[1]."</option>";
										}
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Tahun Rilis</td>
						<td>:</td>
						<td><input type="text" name="thn_rilis" value=<?php echo $data[2]; ?> /></td>
					</tr>
					<tr>
						<td>Jenis Analisa</td>
						<td>:</td>
						<td><input type="text" name="jenis_analisa" value=<?php echo $data[3]; ?> /></td>
					</tr>
					<tr>
						<td>Nama Pembuat</td>
						<td>:</td>
						<td><textarea name="nama_pembuat" ><?php echo $data[4]; ?></textarea></td>
					</tr>
					<tr>
						<td>Sumber Data</td>
						<td>:</td>
						<td><textarea rows=5 cols=20 name="sumber_data" ><?php echo $data[5]; ?></textarea></td>
					</tr>
					<tr>
						<td colspan=3><input type="submit" name="simpan" value="Save"/></td>
					</tr>
				</table>
			</form>
		</body>
	</html>
<?php
	}else{
		header('location:data_geokimia.php');
	}
?>