<?php
	include "../koneksi.php";
	
	if(isset($_POST['login'])){
		if(isset($_POST['username']) && isset($_POST['password'])){
			$user=$_POST['username'];
			$pass=$_POST['password'];
			
			$queri=mysql_query("select *from admin where username='$user' and password='$pass'") or die (mysql_error());
			$result=mysql_num_rows($queri);
			$data=mysql_fetch_array($queri);
			
			if($result==1){
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				
				header('Location:data_wkp.php');
			}else{
				echo "username atau password salah";
			}
		}
	}else{
		header('Location:login.php');
	}
?>