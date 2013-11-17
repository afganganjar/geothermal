<?php
	include "../koneksi.php";
	
	$queri=mysql_query("select * from t_model_konseptual") or die (mysql_error());
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Model Konseptual</h1>
		<h3><a href="#">Tambah Data</a> | <a href="data_wkp.php">Kembali</a> </h3>
		<table border=1>
			<tr>
				<th>No</th>
				<th>Provinsi</th>
				<th>Nama WKP</th>
				<th>Tahun Publikasi</th>
				<th>Nama Pembuat</th>
				<th>Sumber Literatur</th>
				<th colspan=2>Aksi</th>
			</tr>
			<?php
				$no=1;
				while($data=mysql_fetch_array($queri)){
					$id_model=$data[0];
					$id_wkp=$data[1];
					
					$queri2=mysql_query("select * from t_wkp where id_wkp=$id_wkp") or die (mysql_error());
					$data2=mysql_fetch_array($queri2);
					$id_prov=$data2[2];
					
					$queri3=mysql_query("select *from t_provinsi where id_provinsi=$id_prov") or die (mysql_error());
					$data3=mysql_fetch_array($queri3);
					
					echo "<tr>";
					echo "<td>".$no."</td>";
					echo "<td>".$data3[1]."</td>";
					echo "<td>".$data2[1]."</td>";
					echo "<td>".$data[2]."</td>";
					echo "<td>".$data[3]."</td>";
					echo "<td>".$data[4]."</td>";
					echo "<td><a href='proses_update.php?id=$id_model'>Update</a></td>
						 <td><a href=\"proses-hapus.php?id=$id_model\""."onClick=\"return confirm('Hapus Data?')\""."</a>Hapus</td>";
					echo "</tr>";
					
				$no++;
				}
			?>
		</table>
	</body>
</html>