<?php
if (isset($_POST['submit'])){
	$video = $_FILES['session_video'];
	if ($video['error'] === 0){
		if ($video['size']<1000000000){
			$session_id = 2;
			$session_name = $_POST['session_name'];
			$folder = 'Videos\\'.$session_id." ".$session_name;
			if (!is_dir($folder)) {
				mkdir($folder);
			}
			move_uploaded_file($video['tmp_name'], $folder.'\\'.$video['name']);
		}
	}
}
?>