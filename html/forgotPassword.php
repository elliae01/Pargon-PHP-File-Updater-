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
		.loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #00008b;
            /* Blue */
            border-radius: 50%;
            width: 10em;
            height: 10em;
            animation: spin 2s linear infinite;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
	</style>
</head>
<script>

</script>
<body>
	
	<?php include '../php/phpOutlook.php';?>
	<div class="loader" style="align-text:center;display:none"></div>
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
						<form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
						<fieldset id="main_page" style="width:250px;border-color:blue;border-style:inset;
							background-color:  #F0F8FF;">
    						<legend>Password Reset</legend>
    						<br>
    						<label for="email"></label>
    						<br>
    						<font size="3px" color="blue">Email</font>
    						<br>
    						<input type="text" id="email" placeholder="Enter email" name="email" value="<?PHP echo $emailInput;?>"
    						style="padding:12px 25px;margin-bottom:5px"><br>
    						<button type="submit" id="next1" style="padding:7px 40px;">Next</button>
    						<button type="button" id="cancel1" onclick="location.href='loginadmin.php'" style="padding:7px 17px">Cancel</button>
    						<br><br>
    						<font size="3px" color="red"><?php echo $message1;?></font>
    						<br><br>
					</fieldset>
					</form>
					</h1>
						

		</section>
		
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>
	
</body>
</html>
