<?php 
    session_start();
    if(isset($_SESSION['username'])==0) {
        $_SESSION['username']="GUEST";
        $_SESSION['newser']=FALSE;
    }

    //Connessione MySQL
    $connessione=mysql_connect("localhost","mulasFederico","pernice5150");
    if(!$connessione) {
        print("Connessione al server fallita");
        exit;
    }
    $DB = mysql_select_DB("amm15_mulasFederico");
    if(!$DB)
    {
        print("Connessione al database fallita");
        exit;  
    }
    
?>
