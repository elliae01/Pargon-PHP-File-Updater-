

<?php

include '../includes/dbHelper.php';
    
    $newEmail = $_POST['newEmail'];
    $user = $_POST['user'];
    $emailInput = $newEmail;
    $nameInput = $user;

    if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['pass2']))
    {
        if ($_POST['user'] == '')
        {
            $error1 = "Username cannot be empty!";
        }
        else if ($_POST['pass'] != $_POST['pass2'])
        {
            $error1 = "Passwords are not identical!";
        }
        else
        {
            $connection = dbConnect();
            
            $alter = "ALTER TABLE user_and_password DROP PRIMARY KEY;";
            // execute query
            $alterTable = $connection->query($alter);
            
            $alter2 = "ALTER TABLE user_and_password MODIFY Password VARCHAR(255);";
            $alterTable2 = $connection->query($alter2);
            
            $sql = sprintf("Select 1 FROM user_and_password WHERE Username = '%s'",
                      $connection->real_escape_string($_POST["user"]));
            
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
                           $connection->real_escape_string($_POST["user"]),
                           $connection->real_escape_string($password_hash),
                           $connection->real_escape_string($_POST["newEmail"]));
                
                // execute query
                $result = $connection->query($sql) or die(mysqli_error($connection));  

                if ($result === false)
                    die("Could not query database");
                else
                
                    //ob_start();
                    //echo "User was inserted into DB!\n";
                    
                    echo "<div style ='font:18px Arial,tahoma,
                    sans-serif;color:blue'><center>***User was successfully inserted into DB!***</center></div>\n";
                    
                    //ob_flush();
                    
                    //power nap
                    //var_dump(time_sleep_until(microtime(true)+1));
                    
                    // redirect user
                    header("Location: ../html/portal.php");
                    //ob_flush();
            }
           
        }
    }
?>

