<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$name= $_POST['name'];
		$email= $_POST['email'];
		$dob= $_POST['dob'];
		$gender= $_POST['gender'];
		$bg= $_POST['bg'];
		
		$filename = $_FILES['dp']['name'];
		$filesize = $_FILES['dp']['size'];
		$filetemp = $_FILES['dp']['tmp_name'];
		$ext = explode('.', $filename);
		$location = '../view/images/'.$username.'.'.end($ext);
		$dp = $username.'.'.end($ext);
		
		
		if($username != '' && $password != '' && $name != ''&& $email != '' && $dob != '' && $gender != '' && $bg != ''){
			if(strlen($username)>3 && strlen($password)>5){
					$user = $username."|".$password."|".$name."|".$email."|".$dob."|".$gender."|".$bg."|".$dp."|";
					$file = fopen('users.txt', 'a');
					fwrite($file, $user);
					fclose($file);
					move_uploaded_file($filetemp, $location);
					header('location: ../view/login.php');
			}else{
				header('location: ../view/registration.php?msg=userpass');
			}
			
		}else{
			header('location: ../view/registration.php?msg=null');
		}
	}else{
		header('location: ../view/registration.php?msg=invalid');
	}

?>