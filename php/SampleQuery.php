<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'unlimiteddigits');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   // or this 
   //$db = new mysqli("localhost","unlimiteddigits","","database");
   $sql = "SELECT * FROM controlled_item";
	$result = $db->query($sql);
	while ($row = $result->fetch_assoc()){
		$resultSoftware= $db->query("SELECT name FROM software WHERE id=".$row['Software']);
		$resultMType= $db->query("SELECT type FROM machine WHERE id=".$row['Machine_Type']);
		$rowMType = $resultMType->fetch_assoc();
		$rowSoftware = $resultSoftware->fetch_assoc();
		echo $rowSoftware['name'] . ' | ' . $rowMType['type'] . ' | ' . $row['File_rule'] . ' | ' . $row['Source_folder'] . ' | ' . $row['Destination_folder'] . '<br/>';
	}
	$db->close();
	unset($db);
?>