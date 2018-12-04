<!DOCTYPE html>


<html>

<head>
	<meta charset="UTF-8">
	<title>Page Floate Layout Template</title>
	<link rel="stylesheet" href="../css/floatlayout.css" type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px;
		}

		#main_page {
			margin: 10px;
			font-weight: bold;
			width: 40%;
			border-radius: 5px;

		}

		#clear {
			clear: both;
		}

		p {
			margin: 5px auto;
			font-size: 24px;
			font-weight: bold;
			color: blue;
		}

		fieldset {
			margin: 10px;
			width: 35%;
			border-radius: 8px;
			background-color: orange;
		}
		button{
			width:10%;
			margin: 0px 0px 10px 70px;
			border-radius:8px;
		}
	</style>
</head>

<body>
	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):?>

	<div id="centerpage">
		<header class="banner">
			<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">User Options</section>
			<nav>
				<a href="./portal.php">Return to Portal</a>
			</nav>
		</header>

		<section id="main">

			<!-- Main Content Begin -->
			<article>
				<!--<h1 id="main_page">Main Page Content </h1>-->
				<fieldset>
					<p>
						Forbidden List of Activities
					</p>
					<input id="forbiddenDeleteCheck" type="checkbox" name="checkbox1"> Deletion
					<br>
					<input id="forbiddenLoggingCheck" type="checkbox" name="logging"> Logging
					<br>
					<input id="forbiddenCopyCheck" type="checkbox" name="copying"> Copying
					

				</fieldset>
				<fieldset>
					<p>
						Obsolete List of Activities
					</p>
					<input id="obsoleteDeleteCheck" type="checkbox" name="checkbox1"> Deletion
					<br>
					<input id="obsoleteLoggingCheck" type="checkbox" name="logging"> Logging
					<br>
					<input id="obsoleteCopyCheck" type="checkbox" name="copying"> Copying
				</fieldset>
				<button id="saveBtn" type="button" >Save</button>
				<button id="undoBtn" type="button" >Undo</button>
			</article>
			<!-- Main Content End -->
			<!-- Right Box Begin-->

			<aside>
				<h1>Reference Links</h1>
				<embed id="mysidebar" src="sidebar.html">
			</aside>
			<!-- Right Box End-->

			<div id="clear"></div>
		</section>
	</div>
	<footer>


	</footer>

<?php else : ?>
	<font size="10px" color="red">Access Denied!</font><br><br>
	<font size="4px" color="blue">Click here to </font>
	<a href="../php/loginSession.php">Login</a>
<?php endif; ?>

</body>

</html>
