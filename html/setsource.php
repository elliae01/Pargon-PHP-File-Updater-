<!DOCTYPE html>


<html>
<head>
	<meta charset="UTF-8">
	<title>Controlled Files: Set Source</title>
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; }
		#main_page {
			margin-bottom: 50px;
			margin-left: auto; margin-right: auto;
			text-align: center;
			}
		#clear {
			clear: both; }
	</style>
</head>

<body>
	
	<?php include '../php/setSourceHelper.php';?>
	
	<div id="centerpage" style="width: 60%">
		<header class="banner">
		<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">File&#xA0;Locations&#xA0;</section>
			<nav>         
				<a href="administeritems.php">&larr; Return to List</a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</nav>
		</header>
		
		<section id="main" style="height:500px">
			
			<form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="post">
				
			<!-- Main Content Begin -->
					<br><br>
					<center><fieldset id="main_page" style="width:200px;border-color:blue;border-style:dotted solid;
					background-color:  #F0F8FF;">
						<legend><b><font size="5px" color="blue">File Selected</font></b></legend><br>
						
						
						
						
						<input type="text" name="file" value="<?PHP echo $ree;?>"
    						style="padding:12px 60px;margin-bottom:20px" disabled="disabled" text-align="center";>
    						</center></fieldset>
    						
					
						<center>
							
						<font size="5px" color="blue"><b>Set Source</b></font><br>
    					<input type="text" name="sourcePath" value="<?PHP echo $ree1;?>"
    						style="padding:12px 10px;margin-bottom:5px;width:350px"><br>
    						
    					<font size="5px" color="blue"><b>Set Destination</b></font><br>
    					<input type="text" name="destPath" value="<?PHP echo $ree2;?>"
    						style="padding:12px 10px;margin-bottom:5px;width:350px"><br><br>
    						
    					<button type="submit" id="update1" style="padding:15px 93px;">Update</button>
    					<br><br>
    					<font size="3px" color="red"><b><?PHP echo $message;?></b></font>
    					
    					</center>
    					
				
					
			<!-- Main Content End -->
			
			<!-- Right Box Begin-->


			<!-- Right Box End-->

			<div id="clear"></div>
			
			</form>
			</fieldset>
		</section>
	</div>

	<footer>
		<p style="text-align: center;"></p>
	</footer>



</body>
</html>
