<?php
	require_once('../../includes/dbHelper.php');
   $db=dbConnect();

?>
<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Controlled Items Administer Items</title>
	<link rel="stylesheet" href="../../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<script type="text/javascript" src="../../js/administeritems.js"></script>
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
	<div id="centerpage">
		<header class="banner">
		<img src="../../images/nninc.jpg" alt="Paragons Logo" class="center"></img>
			<section class="logo">Administer List of Controlled Items</section>
			<nav>         
				<a href="../../html/portal.html">Return to Portal</a>
				<a href="../../html/additem.html">Add new Item</a>
				<a href="../../html/reviewItems.html">Review Item</a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main">Controlled File List</h1>
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
				$sql="select s.name as Software, m.type as 'Machine Type', c.File_rule as 'File, Folder, or Rule', c.Source_folder as 'Source Folder', c.Destination_folder as 'Destination Folder', c.Notes from software s  join machine m  join controlled_item c where c.Software=s.id and m.id=c.Machine_Type";
				DisplayDBasTable($db,$sql,false);
				$db->close();
				unset($db);
			?>
			</article>
			<!-- Main Content End -->
			<!-- Right Box Begin-->

			<aside>
				<h1>Reference Links</h1>
				<embed  id="mysidebar" src="../../html/sidebar.html">
			</aside>
			<!-- Right Box End-->

			<div id="clear"></div>
		</section>
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>
	
</body>
</html>
