<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>

<head>
	<meta charset="UTF-8">
	<title>Controlled Items Logs Page</title>
	<link rel="stylesheet" href="../css/floatlayout.css" type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px;
		}

		#main_page {
			margin-bottom: 1px;
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
			<section class="logo">Logs</section>
			<nav>
				<a href="./portal.php">Return to Portal</a>
			</nav>
		</header>

		<section id="main">
			<!-- Main Content Begin -->
			<article>
				<h1 id="main">Available Logs</h1>
				<!--There seems to be a styling thing forcing this down-->
				<table>
					<tr class="head">
						<th>Log</th>
						<th>Date</th>
						<th>Errors</th>
						<th>Warnings</th>
					</tr>
					<!--Links can be done via bootstrap
				class='clickable-row' data-href='url://'
				or in row as below
				the issue is it makes the text the link, not the box-->
					<tr>
						<th><a href="#">Log 1</th>
						<th><a href="#">10/8/2018</th>
						<th>10</th>
						<th>2</th>
					</tr>
					<tr class="even">
						<th><a href="#">Log 2</th>
						<th><a href="#">10/9/2018</th>
						<th>2</th>
						<th>14</th>
					</tr>
					<tr>
						<th><a href="#">Log 3</th>
						<th><a href="#">10/12/2018</th>
						<th>0</th>
						<th>1</th>
					</tr>
					<tr class="even">
						<th><a href="#">Log 4</th>
						<th><a href="#">10/17/2018</th>
						<th>1</th>
						<th>0</th>
					</tr>
				</table>
			
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