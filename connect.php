<?php 
    session_start();
    if(isset($_SESSION['username'])==0) {
        $_SESSION['username']="GUEST";
        $_SESSION['newser']=FALSE;
    }

    //Connessione MySQL
    $connessione=mysql_connect("localhost","felkun","9006SonicS1948");
    if(!$connessione) {
        print("Connessione al server fallita");
        exit;
    }
    $DB = mysql_select_DB("my_felkun");
    if(!$DB)
    {
        print("Connessione al database fallita");
        exit;  
    }
    
?>
