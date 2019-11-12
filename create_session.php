<html>
<head>
	<title> Training Session Creation </title>
</head>
<style>
	.wrapper{
		bottom-margin:20px;
		position: relative;
		left:300px;
		width:400px;
	}
	video{
		width:100%;
	}
</style>
<body>
	<?php
		$today = date("Y-m-d");
	?>
	<form action = "create_session_controller.php" method = "POST" id = "create_session" enctype = "multipart/form-data">
		<h3> Training Session Name <input type = "text" name = "session_name" required/> </h3> 
		<h3> Choose a video tutorial to upload </h3>
		<input type = "file" id="vid" name = "session_video" accept="video/mp4" required/>
		<div class="wrapper" id="video">
		<video controls></video>
		</div>
		<h3> Schedule the session
		<input type = "date" name = "session_date" min = "<?=$today?>" required>
		<input type = "time" name = "session_time" value = "00:00:00" required> </h3>
		<h3> Enroll trainees to the session </h3>
		<!-- Create check box input types to select trainees -->
		<p><button onclick = "" type = "submit" name = "submit"> Create Session </button></p>
	</form>
	<h3> Session Instructions </h3>
	<textarea rows="4" cols="50" placeholder="Enter instructions here..." name="instructions" form="create_session"></textarea>

	<script>
		(function Preview_Video() {
			'use strict'
			var URL = window.URL || window.webkitURL
 
 
			var Play_Video = function (event) {
			var file = this.files[0]
			var type = file.type
			var videoNode = document.querySelector('video')
			var fileURL = URL.createObjectURL(file)
			videoNode.src = fileURL
		}
  
		  var inputNode = document.querySelector('#vid')
		  inputNode.addEventListener('change', Play_Video, false)
		})()
	</script>
</body>
</html>