<?php
	include "../koneksi.php";
	
	if(isset($_GET['id_wkp'])){
		$id_wkp = $_GET['id_wkp'];
		$sql = mysql_query("select * from t_wkp where id_wkp = '$id_wkp'") or die (mysql_error());
		$data = mysql_fetch_array($sql);
		
		$id_tipe_gunung = $data['id_tipe_gunung'];
		$id_unit = $data['id_unit'];
		$id_perusahaan = $data['id_perusahaan_pengembang'];
		
		$sql_gunung = mysql_query("select * from t_tipegunungapi where id_tipe_gunung = '$id_tipe_gunung'") or die (mysql_error());
		$data_gunung = mysql_fetch_array($sql_gunung);
		$sql_unit = mysql_query("select * from t_unit where id_unit = '$id_unit'") or die (mysql_error());
		$data_unit = mysql_fetch_array($sql_unit);
		$sql_perusahaan = mysql_query("select * from t_perusahaan_pengembang where id_perusahaan_pengembang = '$id_perusahaan'") or die (mysql_error());
		$data_perusahaan = mysql_fetch_array($sql_perusahaan);
	
	
?>
<html>
	<head>
		<title>Data Umum</title>
	</head>
<body>
	<div id="topics">
	
		<div class="thirds" style="overflow:auto;">
		
				<center><p class="p3"><b>Lapangan Panas Bumi</b></p></center>
				</br>
				<p><b>Umum</b></p></br>
				<table>
					<tr>
						<td width="200px">Kabupaten</td>
						<td><?php echo $data['kabupaten']?></td>
					</tr>
					<tr>
						<td>Tipe Gunung Api</td>
						<td><?php echo $data_gunung['tipe_gunung_api']?></td>
					</tr>
					<tr>
						<td>Tanggal Penetapan</td>
						<td><?php echo $data['tgl_penetapan']?></td>
					</tr>
					<tr>
						<td>Peraturan Penetapan</td>
						<td><?php echo $data['per_penetapan']?></td>
					</tr>
					<tr>
						<td>Potensi Daya</td>
						<td><?php echo $data['tot_daya_mungkin']?></td>
					</tr>
					<tr>
						<td>Total Daya Terduga</td>
						<td><?php echo $data['tot_daya_terduga']?></td>
					</tr>
					<tr>
						<td>Total Daya Terbukti</td>
						<td><?php echo $data['tot_daya_terbukti']?></td>
					</tr>
				</table>
				<br>
				<hr>
				<div class="image-row">
					<a class="example-image-link" href="../images/informasi_umum/tangkubanperahu1.jpg" data-lightbox="example-1">
					<img class="example-image" src="../images/informasi_umum/tangkubanperahu1.jpg" width="325px" height="240px"/></a>
				</div>
				<p><b>Kondisi Lahan</b></p></br>
				<table>
					<tr>
						<td width="200px">Luas Area</td>
						<td><?php echo $data['luas'];?> sq-KM</td>
					</tr>
					<tr>
						<td>Kawasan Hutan Lindung</td>
						<td><?php if($data['kabupaten'] == 1){ echo "YA";}else{echo "TIDAK";}?></td>
					</tr>
				</table>
				<!-- Batas Area tidak dicantumkan karena sudah ada di bagian detailpage.php -> div = top_info -->
				<br><br><br><br><br><br><br>
				<hr>
				<p><b>Perusahaan Pengembang</b></p></br>
				<table>
					<tr>
						<td width="200px">Nama</td>
						<td><?php echo $data_perusahaan['nama_perusahaan']?></td>
					</tr>
					<tr>
						<td>Jumla Sumur</td>
						<td><?php echo $data['jml_sumur']?></td>
					</tr>
					<tr>
						<td>Jumlah Unit</td>
						<td>10</td>
					</tr>
				</table>
				<br>
				<br>
				<?php
					if($data_unit['status_produksi_unit1'] == 1){$unit1 = 'YES';}else{$unit1 = 'NO';}
					if($data_unit['status_produksi_unit2'] == 1){$unit2 = 'YES';}else{$unit2 = 'NO';}
					if($data_unit['status_produksi_unit3'] == 1){$unit3 = 'YES';}else{$unit3 = 'NO';}
					if($data_unit['status_produksi_unit4'] == 1){$unit4 = 'YES';}else{$unit4 = 'NO';}
					if($data_unit['status_produksi_unit5'] == 1){$unit5 = 'YES';}else{$unit5 = 'NO';}
					if($data_unit['status_produksi_unit6'] == 1){$unit6 = 'YES';}else{$unit6 = 'NO';}
				
				?>
				<table style="float: right; margin-top: -90px;">
					<thead>
						<tr>
							<td colspan="4" align="center" style="font-size:20">Kontrak Jual Beli Listrik</td>
						</tr>
						<tr height="15px"></tr>
						<tr>
							<th width="30px"></th>
							<th class="normal">Status Produksi</th>
							<th class="normal">Daya</th>
							<th class="normal">Harga Listrik</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Unit I</td>
							<td><?php echo $unit1;?></td>
							<td><?php echo $data_unit['daya_unit1'];?> MW</td>
							<td><?php echo $data_unit['harga_unit1'];?> US$/kWh</td>
						</tr>
						<tr>
							<td>Unit II</td>
							<td><?php echo $unit2;?></td>
							<td><?php echo $data_unit['daya_unit2'];?> MW</td>
							<td><?php echo $data_unit['harga_unit2'];?> US$/kWh</td>
						</tr>
						<tr>
							<td>Unit III</td>
							<td><?php echo $unit3;?></td>
							<td><?php echo $data_unit['daya_unit3'];?> MW</td>
							<td><?php echo $data_unit['harga_unit3'];?> US$/kWh</td>
						</tr>
						<tr>
							<td>Unit IV</td>
							<td><?php echo $unit4;?></td>
							<td><?php echo $data_unit['daya_unit4'];?> MW</td>
							<td><?php echo $data_unit['harga_unit4'];?> US$/kWh</td>
						</tr>
						<tr>
							<td>Unit V</td>
							<td><?php echo $unit5;?></td>
							<td><?php echo $data_unit['daya_unit5'];?> MW</td>
							<td><?php echo $data_unit['harga_unit5'];?> US$/kWh</td>
						</tr>
						<tr>
							<td>Unit VI</td>
							<td><?php echo $unit6;?></td>
							<td><?php echo $data_unit['daya_unit6'];?> MW</td>
							<td><?php echo $data_unit['harga_unit6'];?> US$/kWh</td>
						</tr>
					</tbody>
				</table>
				</br>
				</br>
				<p></p>			
		</div>
	</div>
</body>
</html>
<?php
	}else{
		header('Location:../index.php');
	}
?>

