<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

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
			margin-bottom: 160px;
		}

		#clear {
			clear: both;
		}
	</style>
</head>

<body>
	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):?>

	<div id="centerpage">
		<header class="banner">
			<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">Add New Items</section>
			<nav>
				<a href="./portal.php">Return to Portal</a>
				<a href="./administeritems.php">Return to Administer Items</a>
			</nav>
		</header>

		<section id="main">
			<!-- Main Content Begin -->
			<article style="font-size:1.3em">
				<br>
				<label for="software">Select a Software Type: &ensp;</label>
				<select id="software" name="software">
					<option selected disabled>Select a Software Type</option>
					<option>MasterCam</option>
					<option>NX</option>
					<option>Partmaker</option>
					<option>NCSimul</option>
					<option>Logs</option>
				</select><br><br>
				<label for="machinetype">Select a Machine Type: &ensp;</label>
				<select id="machinetype" name="machinetype">
					<option selected disabled>Select a Machine Type</option>
					<option>Mill</option>
					<option>Lathe</option>
					<option>Wire</option>
				</select><br><br>
				
				<label for="source-folder">File Folder or Rule: &ensp;</label>
				<input type="file" id="source-folder" webkitdirectory directory multiple/> <br><br>
				<label for="source-path">Source Path: &ensp;</label>
				<input type="file" webkitdirectory directory multiple><br><br>
				<label for="destination">Destination Folder: &ensp;</label>
				<input type="file" webkitdirectory directory multiple> <br><br><br>

				<button type="submit" name="submit">Add This Item</button> <br><br><br><br><br><br><br><br><br><br><br><br>

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
