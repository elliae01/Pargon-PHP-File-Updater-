<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Copy Status</title>
	<link rel="stylesheet" href="../css/floatlayout.css" 
		type="text/css" title="float layout style">
	<style type="text/css">
		body {
			margin: 50px; 
			font-size: 20px;
		}
		#main_page {
			margin-bottom: 10px; }
		#clear {
			clear: both; 
			
		}
		#newFiles{
			position: relative;
			float: right;
			text-align: center;
			margin-bottom: 20px;
		}
		#updated{
			position: relative;
			float: left;
			text-align: center;
			margin: 20px;
		}
		
		h2{
			color: red;
			font-size: 2em;
		}
		h3{
			color: blue;
			font-size: 2em;
		}
	</style>
</head>

<body>
	<div id="centerpage">
		<header class="banner">
			<?php require('../php/views/templates/logo.php'); ?>
			<section class="logo">File Status</section>
		</header>
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main_page">Updates today..</h1>
			<div id="updated">
				<h2> FILES NEEDED </h2>
				<?php
					require_once('../php/fileSystem.php');
					//create the directory
					$cwd = getcwd();
					$dir = "Destination";
	        		if(!is_dir($cwd . "/" . $dir)){
	            		echo "we will create the directory <br>";
	            		mkdir($cwd . "/" . $dir);
	        		}
	        		//create the file that doesn't exist
	        		// using touch we can create a file
				    if(is_dir ($cwd . "/" .  $dir)){
				        echo "'". $dir."'" . " is a NEW directory<br>";
				        
				        echo "we are now in directory of: " . getcwd()."<br>";
				        mkdir($cwd."/".$dir."/"."MasterCam");
				        chdir($cwd. "/" .$dir."/"."MasterCam");
				    	//check if the example.txt exists
				        if(!file_exists("test1.txt")){
				            touch("test1.txt");
				        }
				        if(file_exists("test1.txt")){
				            echo "the file: "."test1.txt"." NOW exists<br>";
				        }
				        if(!file_exists("test2.txt")){
				            touch("test2.txt");
				        }
				        if(file_exists("test2.txt")){
				            echo "the file "."test2.txt"." NOW exists<br>";
				        }
				        if(!file_exists("test3.txt")){
				            touch("test3.txt");
				        }
				        if(file_exists("test3.txt")){
				            echo "the file "."test3.txt"." NOW exists<br>";
				        }
				    }
					
				?>
			</div>
			
			<div id="newFiles">
				<fieldset>
				<h3>NEW ITEMS ADDED</h3>
				<?php
					chdir($cwd."/".$dir."/"."MasterCam");
					readDirectory();
				?>
				</fieldset>
				
			</div>
			
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

</body>
</html>
