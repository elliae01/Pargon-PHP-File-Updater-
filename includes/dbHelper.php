<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'cs372');
   define('DB_PASSWORD', 'pfw');
   define('DB_DATABASE', 'cs372');
   
   function dbConnect()
   {
       $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       // or this 
       //$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
       if (mysqli_connect_errno())
          {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            return false;
          }
        return $db;
   };

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
    	while ($row = $result->fetch_assoc()){
            if ($showHeader) 
            {
        		echo "<tr>";
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
    	    echo "<tr>";
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
?>