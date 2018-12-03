<?php
	if (isset($_GET['dbIndex']))
		$dbIndex=$_GET['dbIndex'];
	else
		$dbIndex=0;
?>

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
<?php if($_SESSION["authenticated"] == true):
	$db=dbConnect();?>
	
	<div id="centerpage">
		<header class="banner">
			<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">Logs</section>
			<nav>
				<a href="./portal.php">Return to Portal</a>
				<a href="./logs.php">Return to Full Log List</a>
			</nav>
		</header>

		<section id="main">
			<!-- Main Content Begin -->
			<article>
				<h1 id="main">Available Logs</h1>

				<?php
					$sql="SELECT LogID, Time, Computer, IP, User, Action, File, Success FROM logs WHERE LogID='$dbIndex'";
					DisplayDBasTable($db,$sql,True);
					$db->close();
					unset($db);
				?>

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