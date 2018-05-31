<?php
    /*Funzione che ha il compito di controllare la correttezza della password
    passata dall'utente*/
    function controllo($ipw,$hpw)
    {
        if(password_verify($ipw,$hpw))
         return TRUE;
        else
         return FALSE;
    }
    //Utilizzo dei dati passati in modalità POST
    $usna=$_POST['us']; //Username
    $uspw=$_POST['pw']; //Password
    //Connessione al DataBase Mysql
    $connessione=new mysqli("localhost","user","Utente123/","tesina");
    if($connessione->connect_error){
        $_SESSION['temp']="Connessione al database fallita";
        header("Location:Errore.php");
        $connessione->close();
        die();
    }
    $sql="SELECT * FROM utenti INNER JOIN squadre ON utenti.Squadra=Squadre.ID_Squadra WHERE Username='$usna'";
    if($risultato->num_rows>0){
        while($row=$risultato->fetch_assoc()){
            if($row['Username']!=""){
                $_SESSION['us']=$usna;
                $_SESSION['s']=$row['Squadra'];
            } else{
                $_SESSION['temp']="Nome utente errato o non esistente";
                header("Location: Errore.php");
                $connessione->close();
                die();
            }
        }
    }
?>
