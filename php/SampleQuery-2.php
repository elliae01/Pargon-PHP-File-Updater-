<?php
/*
   How to display any db table, of any size, in a html table output.

*/
	require_once('../includes/dbHelper.php');
   $db=dbConnect();
   
   $sql="INSERT INTO `controlled_item`(`Software`, `Machine_Type`, `File_rule`, `Source_folder`, `Destination_folder`, `Notes`) VALUES (2,1,'*.txt','C:\\\Source','C:\\\Destination',CONCAT('Sample Insert at ',cast(Now() as char)))";
   SendSQLCMD($db, $sql);
	
	$sql="select s.name as Software, m.type as Type, c.File_rule, c.Source_folder, c.Destination_folder, c.Notes from software s  join machine m  join controlled_item c where c.Software=s.id and m.id=c.Machine_Type";
	DisplayDBasTable($db,$sql,false);
	$db->close();
	unset($db);

/*
Notes about the query

select s.name, c.Machine_Type, c.File_rule, c.Source_folder, c.Destination_folder, c.Notes
from controlled_item c
join software s where c.Software=s.id
group BY `s`.`name` ASC

we want 2 joins - controlled items contain the bulk of the info

select s.name as Software, m.type, c.File_rule, c.Source_folder, c.Destination_folder, c.Notes
from software s 
join machine m 
join controlled_item c where c.Software=s.id and m.id=c.Machine_Type
group BY `s`.`name` ASC

*/
?>

