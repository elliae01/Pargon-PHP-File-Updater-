
<?php

include '../php/login.php';

    if (session_status() == PHP_SESSION_NONE) {
        header("Location: ../html/loginadmin.php");
    }
    else{
        session_destroy();
        $_SESSION["authenticated"] == false;
        // redirect user
        header("Location: ../html/loginadmin.php");
    }
    
?>