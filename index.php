<!DOCTYPE html>
<html>
<head>
	<title>URL Shortner</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>



<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">URL Shortner</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
	</div>
</nav>


<div class="container">
	<div class="jumbotron">
		<h1>URL Shortner</h1>
		<p>Turn your long url into small url.</p>
	</div>
</div>


<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="form-group">
			<label for="url">Type URL</label>
			<input class="form-control" type="url" name="url" id="url" placeholder="https://www.google.com">
		</div>

		<div class="form-group">
			<button id="btn" class="btn btn-danger">Shorten</button>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
  			<div  class="panel-body">
    			<strong id="show"></strong>
  			</div>
		</div>
	</div>
</div>







<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
<script type="text/javascript">
	$(function(){
		$('#btn').on('click', function(){
			var url = $('#url').val();

			$.post('process.php', {url:url}, function(data){
				$('#show').html(data);
			});
		});
	});
</script>
</html>