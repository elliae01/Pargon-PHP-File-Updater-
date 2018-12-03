

<?php


   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'cs372');
   define('DB_PASSWORD', 'pfw');
   define('DB_DATABASE', 'database');
   
   function dbConnect1()
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
    $newEmail = $_POST['newEmail'];
    $user = $_POST['user1'];
    $emailInput = $newEmail;
    $nameInput = $user;

    if (isset($_POST['user1']) && isset($_POST['pass']) && isset($_POST['pass2']))
    {
        if ($_POST['user1'] == '')
        {
            $error1 = "Username cannot be empty!";
        }
        else if ($_POST['pass'] != $_POST['pass2'])
        {
            $error1 = "Passwords are not identical!";
        }
        else
        {
            $connection = dbConnect1();
            
            $alter = "ALTER TABLE user_and_password DROP PRIMARY KEY;";
            // execute query
            $alterTable = $connection->query($alter);
            
            $alter2 = "ALTER TABLE user_and_password MODIFY Password VARCHAR(255);";
            $alterTable2 = $connection->query($alter2);
            
            $sql = sprintf("Select 1 FROM user_and_password WHERE Username = '%s'",
                      $connection->real_escape_string($_POST["user1"]));
            
            // execute query
            $result = $connection->query($sql) or die(mysqli_error());           
            
            // check whether we found a row
            if ($result->num_rows == 1)
            {
                $error1 = "Username is already used!";
            }
            else
            {
                
                $password_hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
                $sql = sprintf("INSERT INTO `user_and_password`(`Username`, `Password`, `Email`) VALUES ('%s','%s', '%s')",
                           $connection->real_escape_string($_POST["user1"]),
                           $connection->real_escape_string($password_hash),
                           $connection->real_escape_string($_POST["newEmail"]));
                
                // execute query
                $result = $connection->query($sql) or die(mysqli_error($connection));  

                if ($result === false)
                    die("Could not query database");
                else
                
                    //ob_start();
                    //echo "User was inserted into DB!\n";
                    
                    $message = "<div style ='font:18px Arial,tahoma,
                    sans-serif;color:blue'><center>***User was successfully inserted into DB!***</center></div>\n";
                    
                    //ob_flush();
                    
                    //power nap
                    //var_dump(time_sleep_until(microtime(true)+1));
                    
                    // redirect user
                    //header("Location: ../html/portal.php");
                    //ob_flush();
            }
           
        }
    }
?>

