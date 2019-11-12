<html>
<head>
	<title> Session Submissions </title>
</head>
<style>
	.wrapper1{
		margin:20px;
		position: relative;
		left:200px;
		height:600px;
		width:800px;
	}
	video{
		width:100%;
	}
	a button {
		display: inline-block;
		font-size:16px;
		padding: 10px 20px;
		position:relative;
		left:550px;
		bottom:160px;
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
	$session_id = 2;
	$session_name = "TS2";
	$trainee_id = 1;
	$trainee_name = "John";
	$video = "83. Static and Dynamic Systems.mp4";
	$path = 'Videos\\'.$session_id." ".$session_name.'\\'.$trainee_id." ".$trainee_name.'\\'.$video;
	?>
	<h3> Training Session: <?=$session_name?> </h3>
	<h4> Trainee: <?=$trainee_name?> </h4> 
	<div class="wrapper1">
		<video controls>
			<source src="<?=$path?>" type="video/mp4">
			browser doesn't support mp4
		</video>
    </div>
    <a href="<?=$path?>" download>
		<button>Download</button>
    </a>

</body>
</html>