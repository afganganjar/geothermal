 <style>
	#button-id{
		text-align: center;
		size: 20px;
		font-size: 10px;
		float: right;
		margin-right: -35px;
		margin-top: -15px;
		border-radius: 4px;
		color: red
	}
 </style>
 
 <?php 
 include "koneksi.php";
 
 if(isset($_GET['id_wilayah'])){
	 $prov = $_GET['id_wilayah'];
	 
	 $sql = mysql_query("select * from t_wkp where id_prov = '$prov'") or die (mysql_error());
	 $sql2 = mysql_query("select * from t_provinsi where id_provinsi = '$prov'") or die (mysql_error());
	 $data2 = mysql_fetch_array($sql2)
	 ?> 
		<input type="hidden" value="<?php echo $data2['provinsi'];?>" id="wilayah">
	<div id="accordion"> 
	<?php
	$row = mysql_num_rows($sql);
	if($row > 0){
		while($data = mysql_fetch_array($sql)){
			$id_wkp = $data['id_wkp'];
		?>
			<h3><a href="#"><?php echo $data['wkp'];?></a></h3>
			<p>
				<button id='button-id'><a href="detail/detailpage.php?id_wkp=<?php echo $id_wkp;?>">Detail</a></button><br/>
				[DESKRIPSI]
			</p>
	<?php
		}
	}else{
		echo "Tidak terdapat WKP di daerah ini";
	}
	?>
	</div>
	<script>
		var provinsi = document.getElementById('wilayah').value;
		$( "#dialog" ).dialog({
				position:['middle',50],
				width:"350px",
				title:"WKP "+provinsi,
		});
		$( "#accordion" ).accordion();
	</script>
<?php
	}else{
		header("location: ../index.php");
	}
?>