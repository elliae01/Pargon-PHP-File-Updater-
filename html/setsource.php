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
			margin-bottom: 0px; }
		#clear {
			clear: both; }
	</style>
</head>

<body>
	
<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):?>

	<div id="centerpage" style="width: 60%">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">File&#xA0;Locations&#xA0;</section>
			<nav>         
				<a href="administeritems.php">&larr; Return to List</a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</nav>
		</header>
		
		<section id="main_page" style="height:425px">
			
			<!-- Main Content Begin -->
					<br><br>
					<center><fieldset style="width:200px;border-color:blue;border-style:dotted solid;
					background-color:  #F0F8FF;">
						<legend><b><font size="5px" color="blue">File Selected</font></b></legend><br>
						<input type="text" id="newPassword"
    						style="padding:12px 130px;margin-bottom:20px" disabled="disabled">
    						</center></fieldset><br><br>
    						
					<article style="width:870px;overflow-y: visible;">
						<center>
						<button type="browse" id="source" style="padding:7px 45px;">Set Source Folder</button>
    					<input type="text" id="sourcePath"
    						style="padding:12px 10px;margin-bottom:5px;width:350px"><br>
    					<button type="browse" id="dest" style="padding:7px 33px;">Set Destination Folder</button>
    					<input type="text" id="destPath"
    						style="padding:12px 10px;margin-bottom:5px;width:350px"><br><br>
    					<button type="update" id="update1" style="padding:15px 93px;">Update</button></center>
    					
					</article>
					
			<!-- Main Content End -->
			
			<!-- Right Box Begin-->


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
