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
		<div class="login-section">
			<div class="login-form">
				<h1> User Login </h1>
				<form action="login_action.php" method="post">
					<table align="center">
						<tr>
							<td>
							<input type="text" name="user_name" placeholder="User Name"/>
							</td>
						</tr>
					
						<tr>
						  <td>
							<input type="password" name="password" placeholder="Password"/>
						  </td>
						</tr>
					
						<tr>
						  <td>
							<input type="submit" name="submit" class="login_btn"value="LOGIN"/>
						  </td>
						</tr>
					</table>
				</form>
				<a href="register.php">
					<input type="submit" name="submit" class="register_btn"value="Sign Up"/>
				</a>

			</div>
		</div>
		
</div>
</body>
</html>




