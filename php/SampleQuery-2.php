<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'cs372');
   define('DB_PASSWORD', 'pfw');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   // or this 
   //$db = new mysqli("localhost","unlimiteddigits","","database");
	require_once('../includes/dbHelper.php');
	$sql="select s.name as Software, m.type as Type, c.File_rule, c.Source_folder, c.Destination_folder, c.Notes from software s  join machine m  join controlled_item c where c.Software=s.id and m.id=c.Machine_Type group BY `s`.`name` ASC";
	DisplayDBasTable($db,$sql,false);
	$db->close();
	unset($db);
/*
select s.name, c.Machine_Type, c.File_rule, c.Source_folder, c.Destination_folder, c.Notes
from controlled_item c
join software s where c.Software=s.id
group BY `s`.`name` ASC

want 1 more join

select s.name as Software, m.type, c.File_rule, c.Source_folder, c.Destination_folder, c.Notes
from software s 
join machine m 
join controlled_item c where c.Software=s.id and m.id=c.Machine_Type
group BY `s`.`name` ASC


*/
?>

