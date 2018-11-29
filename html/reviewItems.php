<?php
	include '../php/login.php';
	require_once('../includes/dbHelper.php');

	if (isset($_GET['dbIndex']))
		$dbIndex=$_GET['dbIndex'];
	else
		$dbIndex=0;

    $db=dbConnect();

?>
<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Controlled Items Review Items</title>
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; }
		#main_page {
			margin-bottom: 160px; }
		#clear {
			clear: both; }
	</style>
</head>

<body>
	

<?php if($_SESSION["authenticated"] == true):?>

	<div id="centerpage">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">Review Controlled items</section>
			<nav>         
				<a href="./administeritems.php">Return to Full List</a>
				<a href="./setsource.php">Set Source Destination</a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main">Details</h1>
			<?php
				$sql="select c.id, s.name as Software, m.type as 'Machine Type', c.File_rule as 'File, Folder, or Rule', c.Source_folder as 'Source Folder', c.Destination_folder as 'Destination Folder', c.Notes from software s  join machine m  join controlled_item c where c.Software=s.id and m.id=c.Machine_Type and c.id=$dbIndex";
				DisplayDBasTable($db,$sql,True);
				$db->close();
				unset($db);
			?>
<!--			<table>
				<tr>
					<th>MasterCam</th>
					<td>Mill</td>
					<td>*.pst</td>
					<td>F:\Engineering\Post Processers\Matercam\Paragon_Post_Processors\Doosan21i-Indy</td>
					<td>C:\Users\Public\Documents\shared Mcam2019\mill\Posts</td>
				</tr>
			</table>
-->
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
