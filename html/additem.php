<?php include '../php/login.php';?>
<?php if($_SESSION["authenticated"] == true):?>
<?php
	require_once('../includes/dbHelper.php');
	
	
	function addItem(){
		if(checkRule() &&
		checkPath("source") && checkPath("dest") && 
		checkOptions() && checkComment){
			$soft = $_POST['software'];
			$machine = $_POST['machinetype'];
			$rule = $_POST['ruletext'];
			$source = $_POST['sourcetext'];
			$dest = $_POST['desttext'];
			$comment = $_POST['comments'];
			$db = dbConnect();
			$sql = 'INSERT INTO controlled_item(software, machine_type, file_rule, source_folder, destination_folder, notes ) VALUES(\'' . mysqli_real_escape_string($db, $soft) .'\', \'' . mysqli_real_escape_string($db, $machine) .'\', \''. mysqli_real_escape_string($db, $rule) . '\', \'' . mysqli_real_escape_string($db, $source) .'\', \'' . mysqli_real_escape_string($db, $dest) .'\', \'' . mysqli_real_escape_string($db, $comment) . '\')';
			SendSQLCMD($db, $sql);
		}
		else{
			echo "<h1 style=color:#f00>You must completely fill out the form!</h1><br/>";
		}
	}
	
	
	function checkRule(){
		if(isset($_POST["ruletext"])){
			$text = $_POST["ruletext"];
			if(preg_match('/(.[^.]+)$/', $text)){
				return true;
			}
			else{
				return false;
			}
		}
		else{
			return false;	
		}
	}
	
	function checkPath($sord){
		$sordtext = $sord . "text";
		if(isset($_POST[$sordtext])){
			return 1;
		}
		else {
			return 0;;
		}
		
	}
	
	function checkOptions(){
		if(isset($_POST['software']) && $_POST['machinetype']){
			$soft = $_POST['software'];
			if($soft == 'Select a Software Type'){
				return false;
			}
			$machine = $_POST['machinetype'];
			if($machine == 'Select a Machine Type'){
				return false;
			}
			return true;
		}
		else{
			return false;
		}
	}
	
	function checkComment(){
		if(isset($_POST['comments'])){
			$comment = $_POST['comments'];
			if($comment == 'Enter Comments Here'){
				
			}
		}
	}


?>

<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>

<head>
	<meta charset="UTF-8">
	<title>Page Floate Layout Template</title>
	<link rel="stylesheet" href="../css/floatlayout.css" type="text/css" title="float layout style">
	<script type="text/javascript" src="../js/additem.js"></script>
	<style type="text/css">
		body {
			margin: 50px;
		}

		#main_page {
			margin-bottom: 160px;
		}

		#clear {
			clear: both;
		}
	</style>
</head>

<body>
	


	<div id="centerpage">
		<header class="banner">
			<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">Add New Items</section>
			<nav>
				<a href="./portal.php">Return to Portal</a>
				<a href="./administeritems.php">Return to Administer Items</a>
			</nav>
		</header>

		<section id="main">
			<!-- Main Content Begin -->
			<article style="font-size:1.3em">
				<?php 
				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					addItem();
				}
				?>
				<form action="" method="post">
					<br>
					<label for="software">Select a Software Type: &ensp;</label>
					<select id="software" name="software">
						<option selected disabled>Select a Software Type</option>
						<option>MasterCam</option>
						<option>NX</option>
						<option>Partmaker</option>
						<option>NCSimul</option>
						<option>Logs</option>
					</select><br><br>
					<label for="machinetype">Select a Machine Type: &ensp;</label>
					<select id="machinetype" name="machinetype">
						<option selected disabled>Select a Machine Type</option>
						<option>Mill</option>
						<option>Lathe</option>
						<option>Wire</option>
					</select><br><br>
					
					<label for="source-folder">File Folder or Rule: &ensp;</label>
					<input type="button" value="Get Ext" onclick="getExt()">
					<input type="file" id="rule" name="rule" /><br>
					<input type="text" id="ruletext" name="ruletext"/> <br><br>
					
					<label for="source-path">Source Path: &ensp;</label><br>
					<input type="text" id="sourcetext" name="sourcetext"/> <br><br>
					
					<label for="destination">Destination Folder: &ensp;</label><br>
					<input type="text" id="desttext" name="desttext"/> <br><br><br>
					
					<label for="comments">Comments: &ensp;</label><br>
					<textarea rows="5" cols="70" name="comments" id="comments">Enter Comments Here </textarea><br><br><br><br><br><br><br>
	
					<button type="submit" name="submit">Add This Item</button> <br><br><br><br><br><br><br><br><br><br><br><br>
				</form>
				

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
		
	</footer>

<?php else : ?>
	<font size="10px" color="red">Access Denied!</font><br><br>
	<font size="4px" color="blue">Click here to </font>
	<a href="../php/loginSession.php">Login</a>
<?php endif; ?>

</body>

</html>
