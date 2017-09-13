<!DOCTYPE html>
<html>
	<head>
		<title>HELLO</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<style>
		.parallax { 
		    /* The image used */
		    background-image: url("http://media1.santabanta.com/full1/Creative/Abstract/abstract-778a.jpg");

		    /* Set a specific height */
		    height: 600px; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: repeat;
		    /*background-size: cover;*/
		}
		.parallax2 { 
		    /* The image used */

		    background-image: url("https://previews.123rf.com/images/urrra/urrra1401/urrra140100219/24942255-Abstract-tech-illustration--Stock-Vector-background-technology-abstract.jpg");
		    /* Set a specific height */
		    height: 600px; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: repeat;
		    /*background-size: cover;*/
		}
	</style>
	<body>	
		<div class="parallax"></div>
		<div style="background-color: silver;background-opacity:0.9; font-size:36px;" align="center">{{$id}} {{$nama}} {{$jurusan}}</div>
		<div class="parallax2"></div>
	</body>
</html>