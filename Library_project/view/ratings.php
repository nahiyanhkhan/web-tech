<html>
<head>
	<title>Ratings</title>
</head>
<body>
	<table height="100%" width="100%">
		<tr height="20%">
			<td width="15%">
				<a href="home.php"><img src="images/online_library.png", height="165px", width="260px"></a>
			</td>
			
			<td align="center">
				<h1>Online Library System</h1>
				<h4>Borrow your desired book</h4>
			</td>
			
			<td width="15%" align="center">
				<a href="profile.php">Edit Profile</a><br><br>
				<a href="../controller/logout.php">Logout</a>
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
				<table width="40%">
					<tr>
						<th><h2><u>Give Your Book Ratings Here</u></h2><th>
					</tr>
					<tr>
						<td align="center">
						<form method="post" action="../controller/ratingsChk.php">
							<b>Book Name : </b><input type="text" name="book"><br><br>
							<b>Your Ratings (out of 5) : </b><br><br>
							<input type="radio" name="ratings" value="1"> 1
							<input type="radio" name="ratings" value="2"> 2
							<input type="radio" name="ratings" value="3"> 3
							<input type="radio" name="ratings" value="4"> 4
							<input type="radio" name="ratings" value="5"> 5
							<br><br><input type="submit" name="submit" value="Submit">
						</form>
						<b>
						<?php
							if(isset($_GET['msg'])){
								$msg = $_GET['msg'];
								
								if($msg == "done"){
									echo "Ratings Submitted !!! Thanks !!!";
								}
								if($msg == "blank"){
									echo "Please give book name and ratings !!!";
								}
							}
						?>
						</b>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<ul align="left">
					<li><a href="history.php"> History </a></li><br>
					<li><a href="wishlist.php"> Wishlist </a></li><br>
					<li><a href="customlist.php"> Custom List </a></li><br>
					<li><a href="ratings.php"> Ratings </a></li><br>
					<li><a href="review.php"> Review </a></li><br>
					<li><a href="refer.php"> Refer Friends </a></li><br>
					<li><a href="point.php"> Redeem Points </a></li><br>
					<li><a href="complaint.php"> Complaint </a></li><br>
				</ul>
			</td>
		</tr>
	
	</table>

</body>
</html>