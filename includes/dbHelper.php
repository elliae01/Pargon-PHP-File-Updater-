<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'cs372');
   define('DB_PASSWORD', 'pfw');
   define('DB_DATABASE', 'database');
   
   function dbConnect()
   {
       $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       // or this 
       //$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       if (mysqli_connect_error())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return false;
          }
        return $db;
   }

    function SendSQLCMD($db, $sql)
    {
        /*
          $db = database object generated from dbConnect() above
          $sql = SQL command such as create, drop or insert.
        */
    	$result = $db->query($sql);
        if ($result==true) {
            //echo "Command successfull<br>";
        } else {
            echo "Commnd fail: " . $db->error."<br>";
            exit;
        }
       return $result;
    };

    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);
    
        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    };

    function DisplayDBasTable($db, $sql, $showID)
    {
        /*
          $db = database object generated from dbConnect() above
          $sql = SQL statement starting with "select * from "
          true or false.  Do you want to see the Primary key 'id'?
        */
        $showHeader=true;
    	$result = $db->query($sql);
        //echo $sql . '<br>';
    	echo "<table border='1'>";
    	$rowCounter=0;
    	while ($row = $result->fetch_assoc()){
    	    $rowCounter++;
            if ($showHeader)
            {
        		echo "<tr onclick='myFolderFunction(this)'>";
        	        foreach ($row as $key => $value)
        	        {
            			if (($showID) || ($key!='id'))
            			{
            			    echo "<th>$key</th>";
            			};
            		};
        		echo "</tr>";
                $showHeader=false;
            };
                reset($row);
               debug_to_console($rowCounter);
    	        echo "<tr";
                if($rowCounter%2 > 0){ 
                    echo " class='even'";
                } 
                else{ 
                    
                };
                echo " onclick='myFolderFunction(this)'>";
    	        foreach ($row as $key => $value)
    	        {
          			if (($showID) || ($key!='id'))
        			{
              		    echo '<td>'.$value . ' </td>';
        			};
    	        };
    		echo "</tr>";
    	};
    	echo "</table>";
    	return true;
    };
    
    function setSource($sql){
        
        $connection = dbConnect();
		$result = $connection->query($sql);
		$row = mysqli_fetch_array($result);
		//echo $row[0];
		
		// sql to create table
        $sql2 = "CREATE TABLE SetSource (
        id VARCHAR(20) NOT NULL,
        file VARCHAR(100) NOT NULL,
        source VARCHAR(100) NOT NULL,
        destination VARCHAR(100) NOT NULL
        )";
        
        //execute query
        $result2 = $connection->query($sql2);
        
        $sql3 = sprintf("INSERT INTO `SetSource`(`id`, `file`, `source`, `destination`) VALUES ('%s','%s', '%s','%s')",
                $connection->real_escape_string($row[0]),
                $connection->real_escape_string($row[3]),
                $connection->real_escape_string($row[4]),
                $connection->real_escape_string($row[5]));
                
        //execute query
        $result3 = $connection->query($sql3);
        
        
    }
?>