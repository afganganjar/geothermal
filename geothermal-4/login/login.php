<html>
	<head>
		<title></title>
		<link href="../default.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
			<div id="menu-wrapper">
				<center>
				<h1 style="text-align:center; padding:0; margin:0;">Admin Login</h1>
				</center>
			</div>
		<fieldset style="width:300px; margin:auto; border-radius:5px; margin-top:40">
			<form action="validasi.php" method="POST">
				<table>
					<tr height="50">
						<td width="100">Username</td>
						<td><input type="text" name="username" size="20" placeholder="Username" required /></td>
					</tr>
					<tr height="50">
						<td>Password</td>
						<td><input type="password" name="password" size="20" placeholder="Password" required /></td>
					</tr>
					<tr>
						<td colspan=3 align='right'>
							<input type="submit" name="login" value="Login" />
							<input type="reset" name="reset" value="Reset" />
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		<center><a href="../index.php">back</a></center>
	</body>
</html>