<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Page Floate Layout Template</title>
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; }
		#main_page {
			margin-bottom: 180px; }
		#clear {
			clear: both; }
	</style>
</head>

<body>
	 <?php include '../php/login.php';?>
	 <?php if($_SESSION["authenticated"] == true):?>
	<div id="centerpage">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">File Status</section>
			<nav>         
<!--				<a href="#">SiteLink1</a>
				<a href="#">SiteLink2</a>
				<a href="#">SiteLink3</a>
				<a href="#">SiteLink4</a>
-->			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main_page">No new updates today..<h1>

			</article>
			<!-- Main Content End -->
			<!-- Right Box Begin-->

			<aside>
				<h1>Reference Links</h1>
				<embed  id="mysidebar" src="sidebar.html">
			</aside>
			<!-- Right Box End-->

			<div id="clear"></div>
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
