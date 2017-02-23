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
    <title>Inazuma Eleven GO - Registrazione</title>
</head>
<body>
    <h1 class="logo" style="position: center;"><a href="index.php"><img src="media/LOGO.png" /></a></h1>
                
                <!-- Menù di navigazione -->
                <div style="text-align: center;">
                    <a href="index.php">Home</a>
                    <a href="serie.php">La Serie</a>
                    <a href="story.php">La Storia</a>
                    <a href="games.php">I Giochi</a>
                    <a href="gameplay.php">Gameplay</a>
                </div>
        <div id="body" class="contenuto2">
            <!-- Controllo log-in -->
            <?php if($_SESSION['username']=="GUEST") {
                
                    //Controllo stato registrazione
                    if(isset($_SESSION['regriuscita'])==0) {
                        print("<br />Procediamo alla creazione del tuo utente</p><br />");
                    
                        // Controllo errori compilazione form
                        if(isset($_SESSION['e1'])==1) {
                            print($_SESSION['e1']); print("<br />"); unset($_SESSION['e1']);
                        }
                        if(isset($_SESSION['e2'])==1) {
                            print($_SESSION['e2']); print("<br />"); unset($_SESSION['e2']);
                        }
                        if(isset($_SESSION['e3'])==1) {
                            print($_SESSION['e3']); print("<br />"); unset($_SESSION['e3']);
                        }
                        if(isset($_SESSION['e4'])==1) {
                            print($_SESSION['e4']); print("<br />"); unset($_SESSION['e4']);
                        }
                        if(isset($_SESSION['e5'])==1) {
                            print($_SESSION['e5']); print("<br />"); unset($_SESSION['e5']);
                        }
                        if(isset($_SESSION['e6'])==1) {
                            print($_SESSION['e6']); print("<br />"); unset($_SESSION['e6']);
                        }
                        if(isset($_SESSION['e7'])==1) {
                            print($_SESSION['e7']); print("<br />"); unset($_SESSION['e7']);
                        }
                    
                        // Form registrazione utente
                        print("<FORM ACTION=\"register.php\" METHOD=\"POST\">");
                        print("<ul style=\"list-style: none;\">");
                        print("<pre>");
                        print("<li>Nome&#9&#9&#9&#9");
                        print("<INPUT TYPE=text name=\"username\" maxlength=\"20\" /></li><br />");
                        print("<li>Password&#9&#9&#9");
                        print("<INPUT TYPE=password name=\"password\" maxlength=\"20\" /></li><span id=\"little\">"
                                . "(Min 6 Max 20 Caratteri)&#9&#9&#9&#9&#9</span><br />");
                        print("<li>&#9</li>");
                        print("<li>Conferma Password&#9&#9");
                        print("<INPUT TYPE=password name=\"passwordcheck\" maxlength=\"20\" /></li><br />");
                        print("<li>Indirizzo e-mail&#9&#9");
                        print("<INPUT TYPE=text name=\"email\" maxlength=\"45\" /></li><br />");
                        print("<li>Conferma e-mail&#9&#9&#9");
                        print("<INPUT TYPE=text name=\"emailcheck\" maxlength=\"45\" /></li><br />");
                        print("<INPUT id=\"pulsante\" TYPE=Submit VALUE=\"Registrati!\">");
                        print("</pre>");
                        print("</ul>");
                        print("</FORM>");
                    } else {
                        // Se registrazione effettuata
                        print("<span>Registrazione riuscita! Immetti i tuoi campi user e pass e usufruirai di tutti i nostri servizi</span>");
                        print("<br>Per tornare alla home page clicka <a href=\"index.php\">QUI</a>");
                        unset($_SESSION['regriuscita']); }
                } else {
                    // Se già loggato
                    print("<p>Hai gia' effettuato l'accesso come ");
                    echo$_SESSION['username'];
                    print(". Per tornare indietro clicka <a href=\"index.php\">QUI</a>");
            }
?>
            
        </div>
                <br/> <br/> <div style="text-align: center;" class="contenuto">
        Copyright &#169; 2008-2017 Nintendo
    </div>
</body>
</html>