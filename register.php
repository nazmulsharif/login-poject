<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<meta name="viewport"content="width-device-width,initial-scale=1.0">
</head>
<body>
	<div class="maincontainer">
		<!---header section-->
		<div class="header">
			<div class="logo">
				<img src="images/logo.jpg">
			</div>
			<div class="website-title">
				<h1>ICT ASSOCIATION</h1>
			</div>
			<div class="search-area">
				 <input type="text" placeholder="Search..">
				 <button class="btn" type="search">Search</button>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!---header section end-->
		<div class="menu">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Gallery</a></li>
				<li><a href="">Activities</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div>
		<div class="register-section">
				<div class="register-area">
					<h3>Registration Form:</h3>
					<form class="login-form" action="register_action.php" method="post">
						<table>
								<td>User name:</td>
								<td><input type="text" name="user_name"placeholder="user_name"></td>
							</tr>
							<tr>
								<td>Enter password:</td>
								<td><input type="password" name="password"placeholder="password"></td>
							</tr>
						</table>
						<button type="submit"class="btn"name="btn">Register</button>
					</form>
					<a style="float:right;display: inline-block;color: black;margin-right:200px;margin-top:-10px;"class="Alrady-registered" href="login.php">Alrady registered?</a>
					<div class="clearfix"></div>
				</div>
		</div>
		
		<div class="footer-section">
			<footer>&copy; 2018-All rights reserved by Nazmul Sharif</footer>
		</div>
	</div>
</body>
</html>

