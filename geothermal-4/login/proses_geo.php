<?php
	session_start();
	include "../koneksi.php";
	
	if(isset($_POST['simpan'])){
		$thn_rilis=$_POST['thn_rilis'];
		$j_analisa=$_POST['jenis_analisa'];
		$nm_pembuat=$_POST['nama_pembuat'];
		$s_data=$_POST['sumber_data'];
		
		$thn_rilis2=$_POST['thn_rilis2'];
		$j_analisa2=$_POST['jenis_analisa2'];
		$nm_pembuat2=$_POST['nama_pembuat2'];
		$s_data2=$_POST['sumber_data2'];
		
		$thn_rilis3=$_POST['thn_rilis3'];
		$j_gbr=$_POST['jenis_gbr'];
		$s_data3=$_POST['sumber_data3'];
		
		$thn_publikasi=$_POST['thn_publikasi'];
		$nm_pembuat=$_POST['jenis_gbr'];
		$s_literatur=$_POST['sumber_literatur'];
		
		
		
		$queri=mysql_query("insert into t_data_geokimia(id_data_geokimia,id_wkp,tahun_rilis,jenis_analisa,nama_pembuat,sumber_data) values (null,'$id_wkp','$thn_rilis','$j_analisa','$nm_pembuat','$s_data')") or die (mysql_error());
		
		$queri2=mysql_query("insert into t_data_geofisika(id_data_geofisika,id_wkp,tahun_rilis,jenis_analisa,nama_pembuat,sumber_data) values (null,'$id_wkp','$thn_rilis2','$j_analisa2','$nm_pembuat2','$s_data2')") or die (mysql_error());
		
		$queri=mysql_query("insert into t_data_geologi(id_data_geologi,id_wkp,tahun_rilis,jenis_gambar,sumber_data) values (null,'$id_wkp','$thn_rilis3','$j_gbr','$s_data3')") or die (mysql_error());
		
		$queri=mysql_query("insert into t_model_konseptual(id_model_konseptual,id_wkp,tahun_publikasi,nama_pembuat,sumber_literatur) values (null,'$id_wkp','$thn_publikasi','$nm_pembuat','$s_literatur')") or die (mysql_error());
		
		
		header('location:data_umum.php');
	}else{
		header('location:form_umum.php');
	}
?>