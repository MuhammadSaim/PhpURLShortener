<?php 


$con = mysqli_connect('localhost','root','','urlshortener') or die("Not Connected To the Database");




if(isset($_POST['url']) && !empty($_POST['url'])){
	$url = mysqli_real_escape_string($con, $_POST['url']);


$check_url_exists = "SELECT * FROM `url` WHERE longUrl = '$url'";
$row = mysqli_query($con, $check_url_exists);
if(mysqli_num_rows($row) > 0){
	
		$data = mysqli_fetch_assoc($row);

		$newUrl =  "http://".$_SERVER['SERVER_NAME'].'/urlshorten/'.$data['shortUrl'];
		echo '<a target="_blank" href="'.$newUrl.'">'.$newUrl.'</a>';


}else{

	$unique_url = base_convert(rand(10000, 99999), 20, 36);

	$inserting = "INSERT INTO `url` (longUrl, shortUrl) VALUES ('$url', '$unique_url')";

	if(mysqli_query($con, $inserting)){
		$newUrl =  "http://".$_SERVER['SERVER_NAME'].'/urlshorten/'.$unique_url;
		echo '<a target="_blank" href="'.$newUrl.'">'.$newUrl.'</a>';
	}
}


}
?>