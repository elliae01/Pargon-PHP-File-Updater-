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
			margin-bottom: 20px;
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
	

</script>

<body>
<?php include '../php/addUser.php';?>	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):
    $db=dbConnect();
?>
    
    
    
	<div id="centerpage" style="width: 40%">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">New User</section>
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
						<form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
						<fieldset id="main_page" style="width:250px;border-color:blue;border-style:inset;
							background-color:  #F0F8FF;">
    						<legend>Add User</legend>
    						<font size="3px" color="red"><?php echo $error1;?></font>
    						<br>
    						<font size="3px" color="blue">Username</font>
    						<br>
    						<input type="text" name="user" value="<?PHP echo $nameInput;?>"
    						style="padding:12px 20px;margin-bottom:5px">
    						<br>
    						<font size="3px" color="blue">Email</font>
    						<br>
    						<input type="text" name="newEmail" value="<?PHP echo $emailInput;?>"
    						style="padding:12px 20px;margin-bottom:5px">
    						<br>
    						<font size="3px" color="blue">New Password</font>
    						<br>
    						<input type="password" name="pass"
    						style="padding:12px 20px;margin-bottom:5px">
    						<br>
    						<font size="3px" color="blue">Confirm Password</font>
    						<br>
    						<input type="password" name="pass2"
    						style="padding:12px 20px;margin-bottom:5px">
    						<br>
    						<button type="submit" id="reset1" style="padding:7px 40px;">Enter</button>
    						<button type="button" id="cancel1" onclick="location.href='portal.php'" style="padding:7px 10px">Cancel</button>
    						<br><br><br>
    					
					</fieldset>
					<?PHP echo $message;?>
					</form>
					</h1>
						

		</section>
		
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>

<?php else : ?>
	<font size="10px" color="red">Access Denied!</font><br><br>
	<font size="4px" color="blue">Click here to </font>
	<a href="../php/loginSession.php">Login</a>
<?php endif; ?>

</body>
</html>
