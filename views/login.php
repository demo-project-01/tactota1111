
<!DOCTYPE html>
<html>
<head>
<title>Tactota Solutions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="../public/css/signup.css" rel="stylesheet" type="text/css"/>

</head>
<body>
	<div>
		<br/>
		<h1> Login/ SignIn</h1>
		<br/>
		<div class="main-container">
			<div class="sub-container">
				<div><img src="../public/images/logo.jpeg" alt="logo" class="verticle-center" width=400 height=auto/></div>
			</div>
			<div class="sub-container">
				<form action="../controller/authenitication.php?action=login" method="post">
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<h6 class="right"><a href="forgetpassword.php">Forgot Password?</a></h6>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Remember me</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="register.php"> Register Now!</a></p>
			</div>
		</div>
		
		<div class="footer">
			<p>© Tactota Solutions All rights reserved </p>
		</div>

	</div>
</body>
</html>
