<?php
	//require_once('../includes/dbHelper.php');

?>
<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Controlled Items Administer Items</title>
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

<body onload="init()">
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):
    $db=dbConnect();?>

	<div id="centerpage">
		<header class="banner">
<!--		<img src="../../images/nninc.jpg" alt="Paragons Logo" class="center"></img> -->
		<?php require('../php/views/templates/logo.php'); ?>
		<section class="logo">Administer List of Controlled Items</section>
			<nav>         
				<a href="../html/portal.php">Return to Portal</a>
				<a href="../html/additem.php">Add new Item</a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main">Controlled File List - Select an Item below to review it.</h1>
			Filter by software:
			<select name="software">
				<option>All Items</option>
				<option>MasterCam</option>
				<option>NX</option>
				<option>Partmaker</option>
				<option>NCSimul</option>
				<option>Logs</option>
			</select>
			 / Filter by Type:
			<select name="machinetype">
				<option>All Items</option>
				<option>Mill</option>
				<option>Lathe</option>
				<option>Wire</option>
			</select>
			
			<?php
				$sql="select c.id, s.name as Software, m.type as 'Machine Type', c.File_rule as 'File, Folder, or Rule', c.Source_folder as 'Source Folder', c.Destination_folder as 'Destination Folder', c.Notes from software s  join machine m  join controlled_item c where c.Software=s.id and m.id=c.Machine_Type";
				DisplayDBasTable($db,$sql,True);
				$db->close();
				unset($db);
			?>
<!--			<table>
				<script src="../../js/admintable.js"></script>
			</table>
-->			</article>
			<!-- Main Content End -->
			<!-- Right Box Begin-->

			<aside>
				<h1>Reference Links</h1>
				<embed  id="mysidebar" src="../html/sidebar.html">
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
