<?php
	session_start();

	if(isset($_POST['submit'])){

		if ($_POST['book'] != '' && $_POST['review'] != '') {

			$review = $_POST['book']." : \n".$_POST['review']."\n\n";
			
			$file = fopen('review.txt', 'a');
			fwrite($file, $review);
			fclose($file);
			header('location: ../view/review.php?msg=done');			
		}else{
			header('location: ../view/review.php?msg=blank');
		}
	}

?>