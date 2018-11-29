<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>

<head>
	<meta charset="UTF-8">
	<title>Controlled Items Portal Page</title>
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
			<section class="logo">Controlled Files: Portal</section> <!--Rename class="title"?-->
			<!--What should be here? PageName? -->
			<nav>
				<center>
				<a href="./pcuserlist.php">PC User List</a>
				<a href="./reviewItems.php">Review Controlled Items</a>
				<a href="./administeritems.php">Administer List of Controlled Items</a>
				<a href="./logs.php">Log List</a>
				<a href="./options.php">Options</a>
				<a href="../php/loginSession.php">Logout</a> <!--style="float:right"-->
				<a href="./newUser.php">New User</a>
				</center>
			</nav>
		</header>

		<section id="main">
			<!-- Main Content Begin -->
			<article>
				<h1 id="main">Tracked Files Information</h1>

				<table>
					<tr class="head" id="file info">
						<th>File Type</th>
						<th>Count</th>
						<th>Date Last Modified</th>
						<th>Time Last Modified</th>
					</tr>

					<tr>
						<th>Mastercam</th>
						<th>94</th>
						<th>10/16/2018</th>
						<th>2:00 pm</th>
					</tr>
					<tr class="even">
						<th>NCsimul</th>
						<th>1204</th>
						<th>10/15/2018</th>
						<th>4:30 pm</th>
					</tr>
										<tr>
						<th>NX</th>
						<th>40</th>
						<th>10/12/2018</th>
						<th>11:00 am</th>
					</tr>

				</table>

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
		<p style="text-align: center;"></p>
	</footer>

<?php else : ?>
	<font size="10px" color="red">Access Denied!</font><br><br>
	<font size="4px" color="blue">Click here to </font>
	<a href="../php/loginSession.php">Login</a>
<?php endif; ?>

</body>

</html>