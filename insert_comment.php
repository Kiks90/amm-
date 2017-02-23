<!DOCTYPE html>
<?php 
    include("connect.php");
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Kikko" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Metroid Prime - Articolo</title>
</head>
<body>
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
            <div class="contenuto2">
            <?php
                // Inserimento commento nell'articolo
                if(isset($_POST['submit'])){
                    if(isset($_POST['testo'])){
                        $testo = addslashes($_POST['testo']);
                    }
                    if(isset($_POST['id'])){
                        $comm_art = addslashes($_POST['id']);
                    }

                    // Scrittura commento articolo su database
                    $username=$_SESSION['username'];
                    $sql = "INSERT INTO tbl_commenti (com_autore, com_testo, com_art) VALUES ('$username', '$testo', '$comm_art')";
  
                    // Conferma inserimento commento
                    if (mysql_query($sql) or die (mysql_error())){
                        echo "<br/ >Commento inserito con successo.";
                    } 
                }else{
                    // Controllo esistenza articolo
                    if(isset($_GET['id'])&&(is_numeric($_GET['id']))){
                        $comm_art = addslashes($_GET['id']);
                        $sql = "SELECT art_id FROM tbl_articoli WHERE art_id='$comm_art'";
                        $query = mysql_query($sql) or die (mysql_error());
                        if(mysql_num_rows($query) > 0){
                            
                            // Modulo inserimento commento
                            print("<form action=\"insert_comment.php\" method=\"post\">");
                            print("<br />Testo:<br />");
                            print("<textarea name=\"testo\" cols=\"50\" rows=\"15\"></textarea><br \>");
                            print("<input name=\"id\" type=\"hidden\" value=\"<? echo $comm_art; ?>\">");
                            print("<input name=\"submit\" type=\"submit\" value=\"Invia\"> </form>");
                        
                        }else{
                            // Articolo inesistente per l'id specificato
                            echo "<br />Impossibile inserire un commento.";
                        }
                    }else{
                        echo "<br />Impossibile inserire un commento.";
                    }
                }
            ?>	
            </div></div>
    <div style="text-align: center;" class="contenuto">
        Copyright &#169; 2008-2017 Nintendo
    </div>
</body>
</html>
