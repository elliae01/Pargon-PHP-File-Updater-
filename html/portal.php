<!DOCTYPE html>


<html>

<head>
	<meta charset="UTF-8">
	<title>Controlled Items: Portal</title>
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
<?php if($_SESSION["authenticated"] == true):
	$db=dbConnect();?>

	<div id="centerpage">
		<header class="banner">
			<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">Controlled Files: Portal</section> <!--Rename class="title"?-->
			<!--What should be here? PageName? -->
			<nav>
				<center>
				<a href="./pcuserlist.php">PC User List</a>
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

				<?php
				
					$sql="SELECT m.Type AS 'File Type', Count(machine_type) AS 'Count' FROM controlled_item as c JOIN machine as m ON c.machine_type=m.id GROUP BY machine_type;";
					DisplayDBasTable($db,$sql,False);
					echo "<br>";
					$sql="SELECT s.Name AS 'Software', Count(software) AS 'Count' FROM controlled_item as c JOIN software as s ON c.software=s.id GROUP BY software;";
					DisplayDBasTable($db,$sql,False);
					$db->close();
					unset($db);
				?>

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