<?php

    
    // enable sessions
    //session_start();
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    else{
        session_destroy();
        $_SESSION["authenticated"] == false;
    }
    
    
    
    //setcookie("pass", "", time()-3600);

    // were this not a demo, these would be in some database
    define("USER", "cs372");
    define("PASS", "pfw");

    // else if username and password were submitted, grab them instead
    if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        // if username and password are valid, log user in
        if ($_POST["user"] == USER && $_POST["pass"] == PASS)
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;
            
            // save username in cookie for a week
            setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);
            //setcookie("pass", $_POST["pass"], time()+10);
            
            // save password in, ack, cookie for a week if requested
            if ($_POST["memberSave"]){
                // save username in cookie for a week
                setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);
                setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);
            }

            // redirect user
            header("Location: portal.php");
            exit;
        }else{
            $error1= "<div style ='font:18px Arial,tahoma,
            sans-serif;color:#ff0000'><center>***Invalid login!***</center></div>";
        }
    }
?>
