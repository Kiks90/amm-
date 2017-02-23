<!DOCTYPE html>
<html>
    <head>
        <noscript><link type="text/css" href="ajax-menu.files/style.css" rel="stylesheet"></noscript>
        <meta charset="UTF-8" />
        <meta name="author" content="Kikko" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/slideshow.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $(function(){
                $('.fadein img:gt(0)').hide();
                setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
            });
        </script>
        <link rel="shortcut icon" href="favicon.ico" />
        <title>Inazuma Eleven - Home</title>
    </head>
    <body onLoad="javascript:startmenu()">
        <div id="header">
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
                
                
                <!-- Menù di navigazione -->
                <br /><br />
                <div class="fadein" style="margin: auto;">
                            <img src="media/st_1.jpg" />
                            <img src="media/st_2.jpg" />
                            <img src="media/st_3.jpg" />
                        </div>
                    <br /><br />
                <div class="contenuto">
                    Sono passati dieci anni dagli eventi del Football Frontier International, 
                    che hanno visto l'Inazuma Japan campione del mondo; in quest'epoca il calcio ha raggiunto un livello mondiale, 
                    e il Quinto Settore (Fifth Sector, フィフスセクター Fifusu Sekutā?) controlla e dirige tutte le squadre del Giappone, 
                    decidendo in anticipo i risultati delle partite ed inviando giocatori detti Imperiali (Seed, シード Shīdo?). 
                    La storia parla di Arion Sherwind, nuovo arrivato alla Raimon Jr. High e del capitano della Raimon Riccardo Di Rigo. 
                    L'allenatore della Raimon sarà Mark Evans (all'età di 23-24 anni). Nella serie appariranno anche Seymour Hillman, 
                    Percy Travis, Silvia Woods, Celia Hills, Axel Blaze, Jude Sharp, David Samford, Shawn Froste, Archer Hawkins, Nelly Raimon, 
                    Scott Banyan, William Glass, Steve Grim, Byron Love, Kevin Dragonfly, Camelia Travis, Austin Hobbes, Darren LaChance, Xavier Foster, 
                    Jordan Greenway, Nathan Swift, Jack Wallside, Caleb Stonewall, il professor Wintersea ed il signor Veteran.
                    </div>
                    <br /><br />
                    <div style="text-align: center">
                    Copyright &#169; 2008-2017 Nintendo
                </div>
            </div>
            
            
        
            
    </body>
</html>
