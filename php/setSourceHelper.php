<?php
    
    
    include '../includes/dbHelper.php';
    
    function fileSelect(){
        
        
        $connection = dbConnect();
        $sql = "SELECT FILE FROM SetSource
                ORDER BY id DESC 
                LIMIT 1";
		$result = $connection->query($sql);
		$row = mysqli_fetch_array($result);

	return $row[0];
		
    }
    
        $ree=fileSelect();
        
        $connection = dbConnect();
        $sql = "SELECT source FROM SetSource
                ORDER BY id DESC 
                LIMIT 1";
		$result = $connection->query($sql);
		$row = mysqli_fetch_array($result);
		$ree1 = $row[0];
		
		
        $sql = "SELECT destination FROM SetSource
                ORDER BY id DESC 
                LIMIT 1";
		$result = $connection->query($sql);
		$row = mysqli_fetch_array($result);
		$ree2 = $row[0];
		
		
        $sql = "SELECT idref FROM SetSource
                ORDER BY id DESC 
                LIMIT 1";
		$result = $connection->query($sql);
		$row = mysqli_fetch_array($result);
		$ree3 = $row[0];
		
		$sourcePath = $_POST['sourcePath'];
		$destPath = $_POST['destPath'];
		
	if (isset($sourcePath) && isset($destPath))
    {

        $alter = sprintf("UPDATE controlled_item SET Source_folder = ('%s'), Destination_folder = ('%s') WHERE id = ('%s');",
                $connection->real_escape_string($sourcePath),
                $connection->real_escape_string($destPath),
                $connection->real_escape_string($ree3));
        
        $alterTable = $connection->query($alter);
        
        $ree1 = $sourcePath;
        $ree2 = $destPath;
        
        $message="Update Success!";
    }
    else if (!$sourcePath || !$destPath){
        //$message="please set source and destination";
    }
       
    





?>