<?php
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Tactota Solutions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="https://kit.fontawesome.com/1b83d32a6d.js" crossorigin="anonymous"></script>
<link href="../public/css/signup.css" rel="stylesheet" type="text/css"/>

</head>
<body>
	<div>
		<br/>
		<h1> User Login</h1>
		<br/>
		<br/>
		<br/>
		<br/>
		<?php if(isset($_SESSION['success'])): ?>
        <div class="alert" id="activate">
            <span class="activebtn">&times;</span>
            <strong><?php echo $_SESSION['success']; ?></strong>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['success']); ?>
	<?php if(isset($_SESSION['reset_password'])): ?>
        <div class="alert" id="activate">
            <span class="activebtn">&times;</span>
            <strong><?php echo $_SESSION['reset_password']; ?></strong>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['reset_password']); ?>
		<div class="main-container">
			<div class="img">
				<div><img src="../public/images/logo-m.jpeg" alt="logo" width=300 height=auto/></div>
			</div>
			<div class="sub-container" style="padding-bottom:2.5em; padding-top:2em;">
				<form action="../controller/authenitication.php?action=login" method="post">

					<label for='username' id='left-label'>
						<i class="fa fa-user" aria-hidden="true"></i>
						&nbsp&nbspUsername *
					</label>
					<input id='username' class="text" type="text" name="username" required="">
					<label for='pswd1' id='left-label'>
						<i class="fa fa-key" aria-hidden="true"></i>
						&nbsp&nbspPassword *
					</label>
					<input id='pswd1' class="text" type="password" name="password" required="">

					<label for='forget' class="right"><a id='forget' href="forgetpassword.php">Forgot Password?</a></h6>
					
					<input type="submit" value="LOGIN">
				</form>
				<label for='login' id='left-p'>Don't have an Account? <a id='login' href="register.php" style="font-size:1.3em;"> Register Now!</a></p>
			</div>
		</div>
		
		<div class="footer">
			<p>© Tactota Solutions All rights reserved </p>
		</div>

	</div>
</body>
</html>
<script>

setTimeout(function() {
        let alert = document.querySelector(".alert");
        alert.remove();
    }, 1600);

</script>