<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<title>Paragon Medical Forgot Password</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; }
		#main_page {
			margin-bottom: 50px;
			padding-left: 165px;
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
	function reset(){
		
		var email = document.getElementById("email").value
		
		var str = email;
    	var emailString = str.includes("@");
    	
    	if(!emailString){
    		alert("Not a valid email address");
    		return false;
    	}
		alert("Email sent! Select the link in the received email.")
		window.location = "forgotPasswordEntry.php";
		alert("Redirecting to new password screen until verification function is complete")
	}
</script>
<body>
	<div id="centerpage" style="width: 40%">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">Forgot&#xA0;Password&#xA0;</section>
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
				 
				  
					<h1 id="main_page">
						<fieldset style="width:200px;border-color:blue;border-style:inset;
							background-color:  #F0F8FF;">
    						<legend>Password Reset</legend>
    						<br>
    						<label for="email"></label>
    						<br>
    						<font size="3px" color="blue">Email</font>
    						<br>
    						<input type="text" id="email" placeholder="Enter email" 
    						style="padding:12px 20px;margin-bottom:5px"><br>
    						<button type="next" id="next1" onclick="reset()" style="padding:7px 45px;">Next</button>
    						<button type="button" id="cancel1" onclick="location.href='loginadmin.php'" style="padding:7px 20px">Cancel</button>
    						<br><br><br><br>
					</fieldset>
					</h1>
						

		</section>
		
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>
	
</body>
</html>
