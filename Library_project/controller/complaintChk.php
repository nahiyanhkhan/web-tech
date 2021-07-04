<?php
	session_start();

	if(isset($_POST['submit'])){

		if ($_POST['complaint'] != null) {

			$complaint= $_SESSION['username']." : \"".$_POST['complaint']."\"\n\n";
			
			$file = fopen('complaint.txt', 'a');
			fwrite($file, $complaint);
			fclose($file);
			header('location: ../view/complaint.php?msg=done');
		}else{
			header('location: ../view/complaint.php?msg=blank');
		}

	}

?>