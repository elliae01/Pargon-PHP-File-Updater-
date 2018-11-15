<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<title>Paragon Medical</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; 
			margin-left: auto; margin-right: auto;
			}
		#main_page {
			margin-bottom: 50px;
			margin-left: auto; margin-right: auto;
			text-align: center;
			}
		#main_page2{
			float: right;
			padding-right: 7px;
			margin-bottom: 7px;
			
		}
		#clear {
			clear: both; }
	</style>
</head>

<script>
	//Function to verify user credentials
	function match(){
		
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;

		if(username==password){
			alert("Password successfully updated!")
			window.location = "loginadmin.html"
		}
		else{
			alert("Passwords do not match!")
		}
		
		
	}
</script>

<body>
	
	<?php include '../php/login.php';?>
	
	
	<div id="centerpage" style="width: 40%">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">Paragon&#xA0;Update&#xA0;Monitor</section>
			<nav>         
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<br>
			 
			<fieldset id="main_page" style="width:300px;border-color:blue;border-style:inset;
					background-color:  #F0F8FF;">
				<legend>Admin Login</legend>
				<br><br>
				<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					
					<font size="3px" color="blue">Username</font><br>
					
					<?php if (isset($_POST["user"])): ?>
					<input type="text" id="username" name="user" placeholder="Enter username" style="padding:12px 20px"
						value="<?= htmlspecialchars($_POST["user"]) ?>"><br/>
					
					<?php elseif (isset($_COOKIE["user"])): ?>	
					<input type="text" id="username" name="user" placeholder="Enter username" style="padding:12px 20px"
						value="<?= htmlspecialchars($_COOKIE["user"]) ?>"><br/>
					
					<?php else: ?>	
					<input type="text" id="username" name="user" placeholder="Enter username" style="padding:12px 20px"
						value=""><br/>
					<?php endif ?>
					
					<font size="3px" color="blue">Password</font>
					<br>
					<input type="text" id="password" name="pass" placeholder="Enter password" style="padding:12px 20px"><br/><br>
					<button type="login" id="submit" style="padding:7px 45px">Login</button>
					<button type="cancel" id="cancel1" onclick="location.href='../FileControl.html'" style="padding:7px 17px">Cancel</button><br>
				    <input type="checkbox" id="password">
					<font size="2px" color="blue" style="font-weight: normal"> Remember me</font><br/>
				</form>
			</fieldset>
			
			<bottom id="main_page2">
				<font size="2px" color="blue" style="font-weight: normal"> Forgot 
				<a href="forgotPassword.html"> password?</a></font>	
			</bottom>
		</section>
		
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>
	
</body>
</html>
