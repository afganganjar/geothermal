<?php
	include "../koneksi.php";
	
	if(isset($_GET['id_wkp'])){
		$id_wkp = $_GET['id_wkp'];
		$sqlgeologi = mysql_query("select * from t_data_geologi where id_wkp = '$id_wkp'") or die (mysql_error());
		$sqlgeofisika = mysql_query("select * from t_data_geokimia_geofisika where id_wkp = '$id_wkp' and status = 1") or die (mysql_error());
?>
<html>
<body>
	<div id="topics">
		<div class="thirds" style="overflow:auto;">
			</br>
			<p class="p3" align="center"><b>Model Geologi Panas Bumi</br></br>Indonesia</b></p></br>
			<div id="outtable">
			
				<table align="center" border=1>
					<thead>
						<tr>
							<th>Tahun Rilis</th>
							<th>Jenis Gambar</th>
							<th>Sumber data</th>
						</tr>
					</thead>
					<tbody>
	<?php
					while($datageologi = mysql_fetch_array($sqlgeologi)){
						$tahun = $datageologi['tahun_rilis'];
						$jenisgambar = $datageologi['jenis_gambar'];
						$sumber = $datageologi['sumber_data'];
						$gambar = base64_encode($datageologi['gambar'])
	?>
							<tr>
								<td><?php echo $tahun; ?></td>
								<td><?php echo $jenisgambar; ?></td>
								<td><?php echo $sumber; ?></td>
								<td><img src="data:image/jpeg;base64,<?php echo $gambar; ?>" width="150" height="150"></td>
							</tr>
	<?php
					}
	?>
					</tbody>
				</table>
			</div>
			</br>
			<!-- Kalau ada kota tambahan --->
			</br>
			<p class="p3" align="center"><b>Model Geofisika Panas Bumi</br></br>Indonesia</b></p></br>
			<div id="outtable">
				<table align="center" border=1>
					<thead>
						<tr>
							<th>Tahun Rilis</th>
							<th>Jenis Analisa</th>
							<th>Nama Pembuat</th>
							<th>Sumber data</th>
						</tr>
					</thead>
					<tbody>
<?php
					while($datageofisika = mysql_fetch_array($sqlgeofisika)){
						$tahun_rilis = $datageofisika['tahun_rilis'];
						$jenis_analisa = $datageofisika['jenis_analisa'];
						$nama_pembuat = $datageofisika['nama_pembuat'];
						$sumber = $datageofisika['sumber_data'];
						$gambar = base64_encode($datageofisika['gambar'])
?>
							<tr>
								<td><?php echo $tahun_rilis; ?></td>
								<td><?php echo $jenis_analisa; ?></td>
								<td><?php echo $nama_pembuat; ?></td>
								<td><?php echo $sumber; ?></td>
								<td><img src="data:image/jpeg;base64,<?php echo $gambar; ?>" width="150" height="150"></td>
							</tr>
<?php
					}
?>
					</tbody>
				</table>
			</div>
		</div>	
	</div>
</body>
</html>
<?php
	}else{
		header('Location:../index.php');
	}
?>
