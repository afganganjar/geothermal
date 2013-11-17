<?php
	include "../koneksi.php";
	
	if(isset($_GET['id_wkp'])){
		$id_wkp = $_GET['id_wkp'];
		$sqlmodel = mysql_query("select * from t_model_konseptual where id_wkp = '$id_wkp'") or die (mysql_error());
?>
<html>
<body>
	<div id="topics">
		<div class="thirds" style="overflow:auto;">
		</br>
		<p class="p3" align="center"><b>Model Konseptual Lapangan Panas Bumi</br></br>Indonesia</b></p></br>
			<div id="outtable">
			
				<table align="center" border=1>
					<thead>
						<tr>
							<th>Tahun Publikasi</th>
							<th>Nama pembuat</th>
							<th>Sumber Literal</th>
						</tr>
					</thead>
					<tbody>
<?php
					while($datamodel = mysql_fetch_array($sqlmodel)){
						$tahun = $datamodel['tahun_publikasi'];
						$pembuat = $datamodel['nama_pembuat'];
						$sumber = $datamodel['sumber_literatur'];
						$gambar = base64_encode($datamodel['gambar'])
?>
							<tr>
								<td><?php echo $tahun; ?></td>
								<td><?php echo $pembuat; ?></td>
								<td><?php echo $sumber; ?></td>
								<td><img src="data:image/jpeg;base64,<?php echo $gambar; ?>" width="150px" height="150px"></td>
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