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
            <div class="contenuto">
                <?php
                
                // Controllo id pagina
                    if(isset($_GET['id'])&&(is_numeric($_GET['id']))){
                    
                        // Lettura dati articolo
                        $id = $_GET['id'];
                        $sql = "SELECT art_autore,art_titolo,art_data,art_articolo FROM tbl_articoli WHERE art_id='$id'";
                        $query = mysql_query($sql) or die (mysql_error());
                
                        if(mysql_num_rows($query) > 0){
                            // Mostra articolo su schermo
                            $riga = mysql_fetch_array($query) or die (mysql_error());
                            $autore = stripslashes($riga['art_autore']);
                            $titolo = stripslashes($riga['art_titolo']);
                            $data = $riga['art_data'];
                            $articolo = stripslashes($riga['art_articolo']);
                            echo "<h2>".$titolo."</h2>" . $articolo . "<br /><br />";
                            $data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $data);
                            echo "Scritto da <b>". $autore . "</b>";
                            echo " | Articolo postato il <b>" . $data . "</b>"; 
  
                            // Link inserimento commenti  
                            echo "<br /><a href=\"insert_comment.php?id=$id\">Invia un commento</a><br /><br />";

                            // Commenti articolo
                            $sql_comm = "SELECT com_autore, com_testo FROM tbl_commenti WHERE com_art='$id'";
                            $query_comm = mysql_query($sql_comm) or die (mysql_error());
                            if(mysql_num_rows($query_comm) > 0){
                                echo "Commenti:<br />";
                                while($row_comm = mysql_fetch_array($query_comm)){
                                    $comm_autore = stripslashes($row_comm['com_autore']);
                                    $comm_testo = stripslashes($row_comm['com_testo']);
                                    echo $comm_testo . "<br />";
                                    echo "Inserito da <b>". $comm_autore . "</b>";
                                    echo "<br /><br />";
                                }
                            }
                        }
                    }else{
                        // Id articolo errato
                        echo "<br />Nessun articolo trovato.";
                    }
                ?>	
            </div></div>
    <div style="text-align: center;" class="contenuto">
        Copyright &#169; 2008-2017 Nintendo
    </div>
</body>
</html>
