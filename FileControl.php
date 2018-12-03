<!DOCTYPE html>
<!-- This example is based on the examle in "Dynamic Web Programming and HTML5" by Paul S. Wang -->

<html>

<head>
    <meta charset="UTF-8">
    <title>Page Floate Layout Template</title>
    <link rel="stylesheet" href="./css/floatlayout.css" 
        type="text/css" title="float layout style">
    <style type="text/css">
        body {
            margin: 50px;
        }

        #main_page {
            margin-bottom: 1px;
        }

        #clear {
            clear: both;
        }
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #00008b;
            /* Blue */
            border-radius: 50%;
            width: 10em;
            height: 10em;
            animation: spin 2s linear infinite;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div id="centerpage">
        <header class="banner">
            <img src="./images/nninc.jpg" alt="Paragon's Logo" class="center"></img>
            <section class="logo">Paragon&#xA0;Medical</section>
            <!--What should be here? PageName? -->
        </header>

        <section id="main">
            <!-- Main Content Begin -->
            
                <br><br><br><br>
                <div class="loader" style="align-text:center"></div>
                <br><br><br><br>
                <!-- This is where the link to next page goes. Not certain which is supposed to be the next page, though-->
                <?php 
                    require_once('./includes/dbHelper.php');
                    require_once('./includes/helpers.php');
                    $ip = getIP();
                	$db = dbConnect();
                	$sql = 'INSERT INTO computername(IP_wired) VALUES(\'' . $ip . '\')';
                	$result = SendSQLCMD($db, $sql);
                	if($result){
                		
                	}
                	else{
                	    echo 'item not added sucessfully';
                	}
                ?>
                <script>setTimeout(function(){window.location.href='./html/copystatus.php'},10000);</script> <!-- 4000 -->
            
            <!-- Main Content End -->

            <div id="clear"></div>
        </section>
    </div>

    <footer>
        <p style="text-align: center;"><a href="./html/loginadmin.php">To admin login page</a></p>
    </footer>

</body>

</html>
