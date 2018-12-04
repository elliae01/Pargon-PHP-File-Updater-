<!DOCTYPE html>

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
			width: 45%;
		}
		#updated{
			position: relative;
			float: left;
			text-align: center;
			margin: 20px;
			width: 45%;
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
				<h2> SOURCE FILES </h2>
				<?php
					require_once('../php/fileSystem.php');
					//create the directory
					$cwd = getcwd();
					$dest = "Destination";
					$destination = "/home/ubuntu/workspace/html/Destination/MasterCam/";
					$source = "/home/ubuntu/workspace/html/Source/MasterCam/";
					
					//create the file directory that doesn't exist
	        		if(!is_dir($cwd . "/" . $dest)){
	            		echo "we will create the directory <br>";
	            		mkdir($cwd . "/" . $dest);
				        echo "'". $dest."' is a NEW directory<br>";
	        		}
	        		if(is_dir ($cwd . "/" .  $dest)){
				        //echo "we are now in directory of: " . getcwd()."<br>";
				        if(is_dir($destination)){
				        	echo "'".$dest."' is a OLD directory<br>";
				        }else{
				        	//create the directory and 
				        	mkdir($destination);
				        }
				    }
				    chdir($destination);
				    		//check if the example.txt exists
			    		for($i = 1; $i <= 3; $i++){
					        if(file_exists("test".$i.".txt")){
					            echo "test".$i.".txt Currently exists in the ".$dest." Directory<br>";
					        }else{
						        if(!copy($source."test".$i.".txt", $destination."test".$i.".txt")){
						           echo "file cannot be copied";
						        }else{
						        	echo "test".$i.".txt's "."file has been copied sucessfully!<br>";
						        }
					        }
					        
				    	}
				?>
			</div>
			
			<div id="newFiles">
				<fieldset>
				<h3>DESTINATION ITEMS</h3>
				<?php
					chdir($destination);
					readDirectory($destination);
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
