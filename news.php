<!DOCTYPE html>
<!-- Connessione al database -->
<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Kikko" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="shortcut icon" href="favicon.ico" />
        <title>Inazuma Eleven GO - Inserimento News</title>
    </head>
    <body>
        <div id="header">
            
                
                
                <!-- Menù di accesso news -->
                <div id="news" style="float: right;">
                    
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
                    <br/>
                    <?php if($_SESSION['newser']==TRUE) {
                        print("<a style=\"float: right;\" href=\"news.php\">Area News</a>");
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
                </div><br />
                <div id="contenuto">
                    <?php
                        // Controllo se newser
                        if($_SESSION['newser']==TRUE){
                            print("<h1 style=\"text-align: center;\">Inserisci un articolo</h1>");
                            // Verifica se titolo e articolo news sono definiti e non nulli
                            if(isset($_POST['submit'])){
                                if(isset($_POST['titolo'])){
                                    $titolo = addslashes($_POST['titolo']);
                                }
                                if(isset($_POST['articolo'])){
                                    $articolo = addslashes($_POST['articolo']);
                                }   

                                // Scrittura su database della news
                                $username = $_SESSION['username'];
                                $sql = "INSERT INTO tbl_articoli (art_autore, art_titolo, art_articolo, art_data)"
                                        . "VALUES ('$username', '$titolo', '$articolo', now())";
                                
                                // Controllo successo scrittura
                                if (mysql_query($sql) or die (mysql_error())){
                                    print("<div style=\"text-align: center;\">Articolo inserito con successo</div>");
                                }
                            } else {
                            
                                // Form inserimento dati
                                print("<center><form action=\"news.php\" method=\"post\">");
                                print("Titolo:<br />");
                                print("<input name=\"titolo\" type=\"text\" size=\"40\"><br />");
                                print("Articolo:<br />");
                                print("<textarea name=\"articolo\" cols=\"50\" rows=\"15\"></textarea><br />");
                                print("<input name=\"submit\" type=\"submit\" value=\"Invia\"></form></center>");
                            }
                        } else {
                            print("<br /><center>Accesso riservato ai soli newser."
                                    . "Clicca <a href=\"index.php\">QUI</a> per tornare nella homepage.</center>");
                        }
                    ?>
                     <div style="text-align: center;"><br /><br />
                    Copyright &#169; 2008-2017 Nintendo
                </div>
                </div>
</html>
