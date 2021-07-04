<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			
			if(filesize('users.txt') > 0){
				$file = fopen('users.txt', 'r');
				$data = fread($file, filesize('users.txt'));
				$user = explode('|', $data);				
				//print_r($user);
			}else{
				header('location: ../view/registration.php?msg=register');
			}
			
			for($i=0; $i <= count($user); $i++){
				if($i%8==0){
					//echo $i." ".($i+1).".....";
					if(trim($user[$i]) == $username && trim($user[($i+1)]) == $password){
						setcookie('flag', 'true', time()+1800, '/');
						$_SESSION['username'] = $user[$i];
						$_SESSION['password'] = $user[($i+1)];
						$_SESSION['name'] = $user[($i+2)];
						$_SESSION['email'] = $user[($i+3)];
						$_SESSION['dob'] = $user[($i+4)];
						$_SESSION['gender'] = $user[($i+5)];
						$_SESSION['bg'] = $user[($i+6)];
						$_SESSION['dp'] = $user[($i+7)];
						header('location: ../view/home.php');
						break;
					}else{
						header('location: ../view/login.php?msg=wrong');
					}
				}
			}
		}else{
			header('location: ../view/login.php?msg=null');
		}
	}else{
		header('location: ../view/login.php?msg=invalid');
	}

?>