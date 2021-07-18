<html>
<head>
	<title>Create Account</title>
</head>
<body>
	<table height="100%" width="100%">
		<tr height="20%">
			<td width="15%">
				<a href="../index.html"><img src="images/online_library.png", height="165px", width="260px"></a>
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
				<form method="post" action="../controller/regCheck.php" enctype="multipart/form-data">
					<fieldset style="width:500px">
						<legend>Create Account</legend>
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
								<td>Name : </td>
								<td><input type="text" name="name"></td>
							</tr>
							<tr>
								<td>Email : </td>
								<td><input type="email" name="email"></td>
							</tr>
							<tr>
								<td>Date of Birth : </td>
								<td><input type="date" name="dob"></td>
							</tr>
							<tr>
								<td>Gender : </td>
								<td>
									<input type="radio" name="gender" value="male"> Male
									<input type="radio" name="gender" value="female"> Female
									<input type="radio" name="gender" value="other"> Other
								</td>
							</tr>
							<tr>
								<td>Blood Group : </td>
								<td>
									<select name="bg">
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Profile Picture : </td>
								<td>
									<input type="file" name="dp">
								</td>
							</tr>
							
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Register"></td>
							</tr>
						</table>
					</fieldset>
				</form>
				<b>
				<?php

					if(isset($_GET['msg'])){
						$msg = $_GET['msg'];

						if($msg == 'null'){
							echo "Null value found. Please fill up the blank fields correctly!!!";
						}
						if($msg == 'invalid'){
							echo "Invalid request, please try again!!!";
						}
						if($msg == 'userpass'){
							echo "Username should be at least 4 characters!!!<br>
								  Password should be at least 6 characters!!!";
						}
						if($msg == 'register'){
							echo "Please register first!!!";
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