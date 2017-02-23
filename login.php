<!DOCTYPE html>
<!-- Connessione al database -->
<?php
    include("connect.php");
?>
<html>
    <head>
        <noscript><link type="text/css" href="ajax-menu.files/style.css" rel="stylesheet"></noscript>
        <meta charset="UTF-8" />
        <meta name="author" content="Kikko" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="js/menu.js"></script>
        <link rel="shortcut icon" href="favicon.ico" />
        <title>Inazuma Eleven - Home</title>
    </head>
    <body onLoad="javascript:startmenu()">
        <div id="header">
            
                
                
                <!-- Menù di accesso news -->
                <div id="news" style="float: right;">
                    <?php if($_SESSION['newser']==TRUE) {
                        print("<a style=\"float: right;\" href=\"news.php\">Area News</a>");
                    }
                    ?>
                </div>
                
                <!-- Menù di accesso registrazione/log-in -->
                <div id="login" style="float: right;">
                    <?php if($_SESSION['username']=="GUEST") {
                        print("Benvenuto! - <a href=\"login.php\">Log-in</a>");
                    } else {
                        print("Bentornato ");
                        echo$_SESSION['username'];
                        print("! - <a href=\"logout.php\">Log-out</a>");
                    }
                    ?>
                </div>
                <!-- Logo sito -->
                <h1 class="logo" style="position: center;"><a href="index.php"><img src="media/LOGO.png" /></a></h1>
                
                <!-- Menù di navigazione -->
                <div style="text-align: center;">
                    <a href="index.php">Home</a>
                    <a href="serie.php">La Serie</a>
                    <a href="story.php">La Storia</a>
                    <a href="games.php">I Giochi</a>
                    <a href="gameplay.php">Gameplay</a>
                </div>
                <div class="contenuto2">
            
            <!-- Form per log-in -->
            <?php
                print("<FORM ACTION=\"login_form.php\" METHOD=\"POST\">");		
                print("<ul style=\"list-style: none;\">");
                print("<li>Username</li>");
                print("<li><INPUT TYPE=\"Text\" NAME=\"username\"></li>");
                print("<li>Password</li>");
                print("<li><INPUT TYPE=\"Password\" NAME=\"password\"></li>");
                print("<br />");
                print("<li><INPUT id=\"pulsante\" TYPE=Submit VALUE=\"Log In\"></li>");
                print("<br />");
                print("<li>Non sei registrato? <a href=\"registrazione.php\">Registrati!</a></li>");
                if(isset($_SESSION['accessonegato'])==1) {
                    print("<li><h1>Non hai inserito dati di accesso corretti!</h1></li>");
                    unset($_SESSION['accessonegato']);
                }
                print("</ul>");
                print("</FORM>");
            ?>	
        <div style="text-align: center;">
            Copyright &#169; 2008-2017 Nintendo
        </div>
                </div>
    </div>
</body>
</html>
