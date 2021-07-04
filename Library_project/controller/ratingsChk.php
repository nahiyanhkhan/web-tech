<?php
	session_start();

	if(isset($_POST['submit'])){

		if ($_POST['book'] != '' && $_POST['ratings'] != '') {

			$ratings = $_POST['book']." : ".$_POST['ratings']."/5\n\n";
			
			$file = fopen('ratings.txt', 'a');
			fwrite($file, $ratings);
			fclose($file);
			header('location: ../view/ratings.php?msg=done');
		}else{
			header('location: ../view/ratings.php?msg=blank');
		}
		
	}

?>