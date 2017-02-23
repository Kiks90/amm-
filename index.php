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
                
                <br /><br />
                <div class="column-center" style="text-align: center;">
                <div><iframe width="560" height="315" src="https://www.youtube.com/embed/59QJv2U1rV4" frameborder="0" allowfullscreen style="display: block; margin: 0 auto;"></iframe>
                    <br/><br/>
                        </div>
                <div class="contenuto"><?php
                    require("preview.php");
                    // Lettura news da database
                    $sql = "SELECT * FROM tbl_articoli ORDER BY art_data DESC, art_id DESC";
                    $query = @mysql_query($sql) or die (mysql_error());
                    
                    // Controllo dati news
                    if(mysql_num_rows($query) > 0){
                        // Visualizzazione articoli
                        while($riga = mysql_fetch_array($query)){
                            $id = $riga['art_id'];
                            $autore = stripslashes($riga['art_autore']);
                            $titolo = stripslashes($riga['art_titolo']);
                            $data = $riga['art_data'];
                            $articolo = stripslashes($riga['art_articolo']);
   
                            // Se articolo troppo lungo variabile per i punti di sospensione
                            $continua = "...";
                            echo "<h2>".$titolo."</h2>";
   
                            // Anteprima di ogni singolo articolo
                            echo preview($articolo, 40, $continua); 
                            echo "<br /><br />";
   
                            // Formattazione data
                            $data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $data);
                            // Stampa su video informazioni news ed accesso a news completa e commenti
                            echo  "Scritto da <b>". $autore . "</b>";
                            echo  " | Articolo postato il <b>" . $data . "</b>";
                            echo  " | <a href=\"articolo.php?id=$id\">Leggi tutto</a>"; 
                            echo "<br /><br />";
                        } 
                    }else{
                        // Se sprovvisto di news
                        echo "Nessun articolo presente.";
                    }
                    ?></div><br /><br />
                    <div style="text-align: center;">
            Copyright &#169; 2008-2017 Nintendo
        </div>
            </div>
        </div>
        
        <br /><br />    
        
        
    </body>
</html>
