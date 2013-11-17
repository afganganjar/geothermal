<?php
	include "../koneksi.php";
	
	$queri=mysql_query("select * from t_wkp order by id_prov") or die (mysql_error());
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<center>
		<h1>Data Umum</h1>
		<h3><a href="form_umum.php">Tambah Data</a> | <a href="data_wkp.php">Kembali</a> </h3>
		<table border=1>
			<tr>
				<th rowspan=4>No</th>
				<th colspan=9>Umum</th>
				<th colspan=4>Kondisi Lahan</th>
				<th colspan=21>Perusahaan Pengembang</th>
				<th rowspan=4 colspan=2>Aksi</th>
			</tr>
			<tr>
				<th rowspan=3>WKP</th>
				<th rowspan=3>Provinsi</th>
				<th rowspan=3>Kabupaten</th>
				<th rowspan=3>Tipe Gunung Api</th>
				<th rowspan=3>Tanggal Penetapan</th>
				<th rowspan=3>Peraturan Penetapan</th>
				<th colspan=3>Potensi Daya</th>
				<th rowspan=3>Luas Area</th>
				<th colspan=2>Batas Area</th>
				<th rowspan=3>Hutan Lindung</th>
				<th rowspan=3>Nama</th>
				<th rowspan=3>Jumlah Sumur</th>
				<th rowspan=3>Jumlah Unit</th>
				<th colspan=18>Kontrak Jual Beli Listrik</th>
			</tr>
			<tr>
				<th rowspan=2>Total Daya Mungkin</th>
				<th rowspan=2>Total Daya Terduga</th>
				<th rowspan=2>Total Daya Terbukti</th>
				<th rowspan=2>Lintang</th>
				<th rowspan=2>Bujur</th>
				<th colspan=3>Unit I</th>
				<th colspan=3>Unit II</th>
				<th colspan=3>Unit III</th>
				<th colspan=3>Unit IV</th>
				<th colspan=3>Unit V</th>
				<th colspan=3>Unit VI</th>
			</tr>
			<tr>
				<th>Status Produksi</th>
				<th>Daya</th>
				<th>Harga Listrik</th>
				<th>Status Produksi</th>
				<th>Daya</th>
				<th>Harga Listrik</th>
				<th>Status Produksi</th>
				<th>Daya</th>
				<th>Harga Listrik</th>
				<th>Status Produksi</th>
				<th>Daya</th>
				<th>Harga Listrik</th>
				<th>Status Produksi</th>
				<th>Daya</th>
				<th>Harga Listrik</th>
				<th>Status Produksi</th>
				<th>Daya</th>
				<th>Harga Listrik</th>
			</tr>
			
			<?php
				$no=1;
				while($data=mysql_fetch_array($queri)){
					$id_wkp=$data[0];
					$id_prov=$data[2];
					$id_tipe=$data[9];
					$id_perpeng=$data[16];
					$id_unit=$data[17];
					$hutan=$data[15];
					
					if($hutan==1){
						$status="Ya";
					}else{
						$status="Bukan";
					}
					
					$queri2=mysql_query("select * from t_provinsi where id_provinsi=$id_prov") or die (mysql_error());
					$data2=mysql_fetch_array($queri2);
					
					$queri3=mysql_query("select * from t_tipegunungapi where id_tipe_gunung=$id_tipe") or die (mysql_error());
					$data3=mysql_fetch_array($queri3);
					$nama=$data3[1];
					
					$queri4=mysql_query("select * from t_perusahaan_pengembang where id_perusahaan_pengembang=$id_perpeng") or die (mysql_error());
					$data4=mysql_fetch_array($queri4);
					
					
					echo "<tr>";
					echo "<td>".$no."</td><td>"
							.$data[1]."</td><td>"
							.$data[2]."</td><td>"
							.$data[3]."</td><td>"
							.$nama."</td><td>"
							.$data[10]."</td><td>"
							.$data[11]."</td><td>"
							.$data[12]."</td><td>"
							.$data[13]."</td><td>"
							.$data[14]."</td><td>"
							.$data[4]."</td><td>"
							.$data[5]."&nbsp;-&nbsp;".$data[6]."</td><td>"
							.$data[7]."&nbsp;-&nbsp;".$data[8]."</td><td>"
							.$status."</td><td>"
							.$data4[1]."</td><td>"
							.$data[18]."</td>";
							
							$queri5=mysql_query("select *from t_unit where id_unit=$id_unit") or die (mysql_error());
							$data5=mysql_fetch_array($queri5);
							
							if($data5[7]==0 || $data5[8]==0 || $data5[9]==0 || $data5[10]==0 || $data5[11]==0 || $data5[12]==0 || $data5[13]==0 || $data5[14]==0 || $data5[15]==0 || $data5[16]==0 || $data5[17]==0 || $data5[18]==0){
								$nilai="-";
							}
							
							if($data5[1]==0 || $data5[2]==0 || $data5[3]==0 || $data5[4]==0 || $data5[5]==0 || $data5[6]==0){
								$state="No";
							}else{
								$state="Yes";
							}
					echo "<td>-</td><td>"
						 .$data5[1]."</td><td>"
						 .$data5[7]."</td><td>"
						 .$data5[13]."</td><td>"
						 .$data5[2]."</td><td>"
						 .$data5[8]."</td><td>"
						 .$data5[14]."</td><td>"
						 .$data5[3]."</td><td>"
						 .$data5[9]."</td><td>"
						 .$data5[15]."</td><td>"
						 .$data5[4]."</td><td>"
						 .$data5[10]."</td><td>"
						 .$data5[16]."</td><td>"
						 .$data5[5]."</td><td>"
						 .$data5[11]."</td><td>"
						 .$data5[17]."</td><td>"
						 .$data5[6]."</td><td>"
						 .$data5[13]."</td><td>"
						 .$data5[18]."</td>
						 <td><a href='form_update.php?id=$id_wkp'>Update</a></td>
						 <td><a href=\"proses-hapus.php?id=$id_wkp\""."onClick=\"return confirm('Hapus Data?')\""."</a>Hapus</td>";
							
					echo "</tr>";
					$no++;
				}
			?>
		</table>
	</center>
	</body>
</html>