<?php
    //Funzione per criptare la password dell'utente
    function hashpw($pw){
        $hpw=password_hash($pw,PASSWORD_DEFAULT);
        return $hpw;
    }
    $usna=$_POST['n']; //Nome
    $ussu=$_POST['c'] //Cognome
    $usni=$_POST['un']; //Nome utente
    $sq=$_POST['sq']; //Squadra da segure
    $uspw=$_POST['pw']; //Password
    $usem=$_POST['em']; //Email
    $connessione=new mysqli("localhost","user","Utente123/","tesina");
    if($connessione->connect_error){
        $_SESSION['temp']="Connessione al database fallita";
        header("Location:Errore.php");
        die();
    }
    $pwc=hashpw($uspw);
    $sql="INSERT INTO utenti (Nome,Cognome,Username,Passwd,Email,Squadra) VALUES('$usna','$ussa','$usni','$pwc','usem','$sq')";
    if($connessione->query($sql)===TRUE){
        $_SESSION["temp"]="Nuovo utente registrato";
        header("Location:index.php");
        $connessione->close();
        die();
    } else{
        $_SESSION["temp"]="Utente non registrato riprovare";
        header("Location:errore.php");
        $connessione->close();
        die();
    }
?>
