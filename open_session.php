<html>
<head>
	<title> My Training Session </title>
</head>
<style>
	.wrapper1{
		margin:20px;
		position: relative;
		left:300px;
		height:600px;
		width:800px;
	}
	.wrapper2{
		margin:20px;
		position: relative;
		left:300px;
		width:400px;
	}
	video{
		width:100%;
	}
	a button {
		display: inline-block;
		font-size:16px;
		padding: 10px 20px;
		position:relative;
		left:600px;
		bottom:180px;
		-webkit-transition-duration: 0.4s; /* Safari */
		transition-duration: 0.4s;
	}
	a button:hover {
		background-color: #4CAF50; /* Green */
		color: white;
	}
</style>
<body>
	<?php
	$session_name = "TS1";
	$video_name = "32. Power of CT Signals (Solved Problems 2).mp4";
	?>
	<h2> Title of the training session </h2>
	<h3> Video Tutorial </h3>
	<!-- retrieve session name and video name from db -->
	<div class="wrapper1">
		<video controls>
			<source src="Videos\<?=$session_name?>/<?=$video_name?>" type="video/mp4">
			browser doesn't support mp4
		</video>
   </div>
   <a href="Videos\<?=$session_name?>/<?=$video_name?>" download>
		<button>Download</button>
   </a>

   <h3> Follow the tutorial and submit the video of your training </h3>
   <p> Only Mp4 file types are supported </p>

   <form action = "open_session_controller.php" method = "POST" enctype = "multipart/form-data">
		<input type = "file" id="vid" name = "trainee_video" accept="video/mp4" required/>
		<div class="wrapper2" id="video">
		<video id="vid2" controls></video>
		</div>
		<p><button onclick = "" type = "submit" name = "submit"> Submit Video </button></p>
   </form>

   <script>
		(function Preview_Video() {
			'use strict'
			var URL = window.URL || window.webkitURL
 
 
			var Play_Video = function (event) {
			var file = this.files[0]
			var type = file.type
			var videoNode = document.querySelector('#vid2')
			var fileURL = URL.createObjectURL(file)
			videoNode.src = fileURL
		}
  
		  var inputNode = document.querySelector('#vid')
		  inputNode.addEventListener('change', Play_Video, false)
		})()
	</script>
</body>
</html>