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
			margin: 50px; }
		#main_page {
			margin-bottom: 10px; }
		#clear {
			clear: both; }
		#currentFiles{
			position: relative;
			float: left;
			width: 25%;
		}
		#updated{
			margin: 0px 0px 0px 50px;
			float: right;
			width: 25%;
		}
		#newItems{
			position: relative;
			margin: 20px 0px 0px 500px;
			width: 50%;
		}
		h2{
			color: red;
		}
		h3{
			color: blue;
		}
	</style>
</head>

<body>
	<div id="centerpage">
		<header class="banner">
		<img src="../images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
			<section class="logo">File Status</section>
			<nav>         
<!--			<a href="#">SiteLink1</a>
				<a href="#">SiteLink2</a>
				<a href="#">SiteLink3</a>
				<a href="#">SiteLink4</a>
-->			</nav>
		</header>
		
		<section id="main">
			<!-- Main Content Begin -->
			<article>
			<h1 id="main_page">Updates today..</h1>
			<div id="currentFiles">
				<fieldset>
					<h1> CURRENT FILES</h1>
				<?php
					require_once('../php/fileSystem.php');
					readDirectory();
				?>	
				</fieldset>
			
			</div>
			<div id="updated">
				<h2> FILES NEEDED </h2>
				<?php
				//create the directory
				$cwd = getcwd();
				$dir = "test";
        		if(!is_dir($cwd . "/" . $dir)){
            		echo "we will create the directory <br>";
            		mkdir($cwd . "/" . $dir);
        		}
        		//create the file that doesn't exist
        		// using touch we can create a file
			    if(is_dir ($cwd . "/" .  $dir)){
			        echo "yes " . $dir . " is a directory<br>";
			        chdir($cwd. "/" .$dir);
			        echo "we are now in dir of: " . getcwd()."<br>";
			    	//check if the example.txt exists
			        if(!file_exists("example.txt")){
			            touch("example.txt");
			        }
			        if(file_exists("example.txt")){
			            echo "the file NOW exists";
			        }
			    }
					
				?>
			</div>
			<div id="newItems">
				<h3>NEW ITEMS ADDED</h3>
				<?php
				readDirectory();
				removeDir();
				?>
			</div>
			
		   <!--     <table class="table table-bordered">-->
					<!--<tbody>-->
					<!--	<?php-->
		   <!--             	require_once('../includes/dbHelper.php');-->
		   <!--             	$db = dbConnect();-->
		   <!--             	$sql = 'SELECT Source_folder, File_rule FROM controlled_item';-->
					<!--		DisplayDBasTable($db,$sql,false);-->
					<!--	?>-->
		   <!--             <tr>-->
		   <!--                 <td><?php echo $row['id'] ?></td>-->
		   <!--                 <td><?php echo $row['Source_folder'] . $row['File_rule'] ?></td>-->

		                    <!--<td class="text-center"><a href="download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>-->
		   <!--             </tr>-->
		                
     <!--       		</tbody>-->
     <!--       	</table>-->
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
