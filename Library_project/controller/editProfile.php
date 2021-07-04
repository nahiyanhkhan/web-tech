<?php	
	session_start();
	
	if(isset($_POST['update'])){

			$username= $_SESSION['username'];
			$password= $_SESSION['password'];
			$name= $_POST['name'];
			$email= $_POST['email'];
			$dob= $_POST['dob'];
			$gender= $_POST['gender'];
			$bg= $_POST['bg'];
			
			if(isset($_FILES['dp']) && $_FILES['dp']['size'] > 0){
				$filename = $_FILES['dp']['name'];
				$filesize = $_FILES['dp']['size'];
				$filetemp = $_FILES['dp']['tmp_name'];
				$ext = explode('.', $filename);
				$location = '../view/images/'.$username.'.'.end($ext);
				$dp = $username.'.'.end($ext);
			}else{
				$dp = $_SESSION['dp'];
			}
			
			$file = fopen('users.txt', 'r');
			$data = fread($file, filesize('users.txt'));
			$user = explode('|', $data);
			//print_r($user);
			
			for($i=0; $i <= count($user); $i++){
				if($i%8==0){
					//echo $i." ".($i+1).".....";
					if ($user[$i] == $username) {

						$user[($i+2)] = $name;
						$user[($i+3)] = $email;
						$user[($i+4)] = $dob;
						$user[($i+5)] = $gender;
						$user[($i+6)] = $bg;
						$user[($i+7)] = $dp;

						move_uploaded_file($filetemp, $location);
						$_SESSION['name'] = $name;
						$_SESSION['email'] = $email;
						$_SESSION['dob'] = $dob;
						$_SESSION['gender'] = $gender;
						$_SESSION['bg'] = $bg;
						$_SESSION['dp'] = $dp;
						break;
					}else{
						header('location: ../view/profile.php?msg=wrong');
					}
				}
			}

			$str = implode("|", $user);
			$file = fopen("users.txt", "w");
			fwrite($file, $str);
			fclose($file);
			header('location: ../view/profile.php?msg=done');
	}else{
		header('location: ../view/profile.php?msg=invalid');
	}
?>