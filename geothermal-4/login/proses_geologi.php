<?php
	include "../koneksi.php";
	
	if(isset($_POST['simpan'])){
		$id_prov=$_POST['provinsi'];
		$id_wkp=$_POST['name_wkp'];
		$thn_rilis=$_POST['thn_rilis'];
		$j_gbr=$_POST['jenis_gbr'];
		$s_data=$_POST['sumber_data'];
		
		$queri=mysql_query("insert into t_data_geologi(id_data_geologi,id_wkp,tahun_rilis,jenis_gambar,sumber_data) values (null,'$id_wkp','$thn_rilis','$j_gbr','$s_data')") or die (mysql_error());
		header('location:data_geologi.php');
	}else{
		header('location:form_geologi.php');
	}
?>