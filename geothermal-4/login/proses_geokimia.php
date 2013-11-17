<?php
	include "../koneksi.php";
	
	if(isset($_POST['simpan'])){
		$id_prov=$_POST['provinsi'];
		$id_wkp=$_POST['name_wkp'];
		$thn_rilis=$_POST['thn_rilis'];
		$j_analisa=$_POST['jenis_analisa'];
		$nm_pembuat=$_POST['nama_pembuat'];
		$s_data=$_POST['sumber_data'];
		
		$queri=mysql_query("insert into t_data_geokimia(id_data_geokimia,id_wkp,tahun_rilis,jenis_analisa,nama_pembuat,sumber_data) values (null,'$id_wkp','$thn_rilis','$j_analisa','$nm_pembuat','$s_data')") or die (mysql_error());
		header('location:data_geokimia.php');
	}else{
		header('location:form_geokimia.php');
	}
?>