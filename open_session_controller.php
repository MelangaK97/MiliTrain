<?php
if (isset($_POST['submit'])){
	$video = $_FILES['trainee_video'];
	if ($video['error'] === 0){
		if ($video['size']<1000000000){
			$session_id = 2;
			$session_name = "TS2";
			$trainee_id = 1;
			$trainee_name = "John";
			$folder = 'Videos\\'.$session_id." ".$session_name.'\\'.$trainee_id." ".$trainee_name;
			if (!is_dir($folder)) {
				mkdir($folder);
			}
			move_uploaded_file($video['tmp_name'], $folder.'\\'.$video['name']);
		}
	}
}
?>