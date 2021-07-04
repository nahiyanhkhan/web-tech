<html>
<head>
	<title>Login</title>
</head>
<body>
	<table height="100%" width="100%">
		<tr height="20%">
			<td width="15%">
				<a href="index.html"><img src="images/online_library.png", height="165px", width="260px"></a>
			</td>
			
			<td align="center">
				<h1>Online Library System</h1>
				<h4>Borrow your desired book</h4>
			</td>
			
			<td width="15%" align="center">
				<a href="login.php">Login</a><br><br> 
				<a href="registration.php">Create Account</a>
			</td>
			
		</tr>
		
		<tr>
			<td align="center">
				<h3><u>Categories</u></h3>
				<ul align="left">
					<li><a href="bestseller.php"> Bestseller </a></li><br>
					<li><a href="educational.php"> Educational </a></li><br>
					<li><a href="selfhelp.php"> Self Help </a></li><br>
					<li><a href="islamic.php"> Islamic </a></li><br>
				</ul>
			</td>
			
			<td align="center">
				
				<form method="post" action="../controller/loginCheck.php">
					<fieldset style="width:300px">
						<legend>Login</legend>
						<table>
							<tr>
								<td>Username : </td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>Password : </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Login"></td>
							</tr>
						</table>
					</fieldset>
				</form>
				<b>
				<?php

					if(isset($_GET['msg'])){
						$msg = $_GET['msg'];

						if($msg == 'null'){
							echo "Null value found. Please provide correct username and password!!!";
						}else if($msg == 'wrong'){
							echo "Incorrect username or password!!!";
						}else if($msg == 'invalid'){
							echo "Invalid request, please try again!!!";
						}
					}
				?>
				</b>
			</td>
			<td></td>
		</tr>
	
	</table>

</body>
</html>