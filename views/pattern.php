<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="../style.css" rel="stylesheet">
		<link rel="shortcut icon" href="/images/icons/media-players.png" type="image/png">
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<div class="header">
			<div class="left-header">
			<img src="../images/logo.jpg" height=80px>
			</div>
			<div class="name-header">InternetShop</div>
			<div class="right-header">
			<input type="button" value="Main page" onclick="location.href='main';"/>	
			<input type="button" value="Registration" onclick="location.href='registration';" />
			<a href="#">Sign in</a>
			</div>
		</div>
		<div class="container">
			<?php include 'controllers/'.$content; ?>
		</div>
		<div class="footer">
			<div class="users">
				<input type="button" value="All users" onclick="location.href='all_users';"/>
			</div>
			<div class="rights"> All rigts are reserved©</div>
		</div>
	</body>
</html>






























