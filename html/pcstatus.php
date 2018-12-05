<!DOCTYPE html>


<html>
<head>
	<meta charset="utf-8"/>
	<title>Controlled Items: PC Status</title>
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; }
		#main_page {
			margin-bottom: 1px; }
		#clear {
			clear: both; }
	</style>
</head>

<body>
	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):?>

	<div id="centerpage">
		<header class="banner">
			<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">PC Status</section>
			<nav>         
				<a href="./pcuserlist.php">back to PC List</a>
				<a href="./portal.php">Portal</a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main">Activity on IT101307<h1>
			<embed id="mylog" src="../text/PC-activity.txt">

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
		<p style="text-align: center;">footer</p>
	</footer>

<?php else : ?>
	<font size="10px" color="red">Access Denied!</font><br><br>
	<font size="4px" color="blue">Click here to </font>
	<a href="../php/loginSession.php">Login</a>
<?php endif; ?>

</body>
</html>
