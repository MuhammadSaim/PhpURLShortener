<?php 
$con = mysqli_connect('localhost','root','','urlshortener') or die("Not Connected To the Database");
	
	if(isset($_GET['url']) && !empty($_GET['url'])){
		$url = mysqli_real_escape_string($con, $_GET['url']);


		$pick_url = "SELECT * FROM `url` WHERE shortUrl = '$url'";


		$row = mysqli_fetch_assoc(mysqli_query($con, $pick_url));

		header('Location:'.$row['longUrl']);



	}




 ?>