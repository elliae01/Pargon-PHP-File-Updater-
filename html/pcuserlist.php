<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="utf-8"/>
	<title>Controlled Item PC User List</title>
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<script type="text/javascript" src="../js/pcuserlist.js"></script>
	<style type="text/css">
		body {
			margin: 50px; }
		#main_page {
			margin-bottom: 160px; }
		#clear {
			clear: both; }
	</style>
<!--	<xml id="Txt" src="../text/InI-MC-Updater-Log.txt"></xml> -->
</head>

<body>
	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):
	$db=dbConnect();?>

	<div id="centerpage">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
		<section class="logo">Today's&#xA0;Status&#xA0;By Computer</section>
			<nav> 
				<a href="./portal.php">Return to Portal</a>
				<a href="../FileControl.html">Start Over</a>
				<a href="./pcstatus.php">PC Status</a>
			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main">Computers Receiving updates</h1>
<!--		<textarea name="logfile" form="pcuserlistform"  src="../text/InI-MC-Updater-Log.txt">
Sample Content
Sat 09/08/2018 at 14:15:17.82 - IT101347 -  10.128.6.127(Preferred)  - devind Started Update 
Sat 09/08/2018 at 14:15:22.62 - IT101347 - devind Completed Update from \\NETWORKSRV05HQ 
Sun 09/09/2018 at 14:45:04.87 - IT100908 -  10.128.6.165(Preferred)  - ericw Started Update 
MasterCam 2018 Does Not Appear to be on this computer.
Sun 09/09/2018 at 14:56:27.84 - IT101348 -  10.128.6.71(Preferred)  - kful01 Started Update 
Sun 09/09/2018 at 14:56:43.12 - IT101348 - kful01 Completed Update from \\NETWORKSRV04HQ 
		</textarea>
	-->	
		<br>
			<?php
				//$sql="select c.id, s.name as Software, m.type as 'Machine Type', c.File_rule as 'File, Folder, or Rule', c.Source_folder as 'Source Folder', c.Destination_folder as 'Destination Folder', c.Notes from software s  join machine m  join controlled_item c where c.Software=s.id and m.id=c.Machine_Type";
				$sql="select c.id, c.assetID as 'Computer Name', c.IP_wired, c.IP_wifi, c.username as 'User Name', c.logonserver, c.lastlogon as 'Last Login' from computername c group by c.username;";
				DisplayDBasTable($db,$sql,False);
				$db->close();
				unset($db);
			?>
		
<!--		<table  src="../text/InI-MC-Updater-Log.txt">
			<tr class="head">
				<th>Date<br>Time</th>
				<th>Computer</th>
				<th>IP</th>
				<th>User</th>
				<th>Notes</th>
			</tr>
			<tr onclick="myFunction(this)">
				<th>Sat 09/08/2018<br>14:15:17.82</th>
				<td>IT101347</td>
				<td>10.128.6.165</td>
				<td>devind</td>
				<td>Started Update</td>
			</tr>
			<tr class="even" onclick="myFunction(this)">
				<th>Sat 09/08/2018<br>14:15:22.62</th>
				<td>IT101347</td>
				<td>10.128.6.165</td>
				<td>devind</td>
				<td>Completed Update from \\NETWORKSRV05HQ</td>
			</tr>
			<tr onclick="myFunction(this)">
				<th>Sun 09/09/2018<br>14:45:04.87</th>
				<td>IT100908</td>
				<td>10.128.6.165</td>
				<td>ericw</td>
				<td>Started Update </td>
			</tr>
			<tr class="even" onclick="myFunction(this)">
				<th>Sun 09/09/2018<br>14:47:04.87</th>
				<td>IT100908</td>
				<td>10.128.6.165</td>
				<td>ericw</td>
				<td>MasterCam 2018 Does Not Appear to be on this computer.</td>
			</tr>
			<tr onclick="myFunction(this)">
				<th>Sun 09/09/2018<br>14:56:27.84</th>
				<td>IT101348</td>
				<td>10.128.6.71</td>
				<td>kful01</td>
				<td>Started Update </td>
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
