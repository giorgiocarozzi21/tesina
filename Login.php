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
    try{
        $host="localhost";
        $nomedb="tesina";
        $db=new PDO("mysql:host=$host;dbname=$nomedb","Ut","Tesina2018");
    }catch (PDOException $e) {
        $_SESSION['temp']="Connessione al database fallita";
        header("Location:Errore.php");
        $db=null;
        die();
    }
    $sql="SELECT * FROM utenti INNER JOIN squadre ON utenti.Squadra=Squadre.ID_Squadra WHERE Username='$usna'";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    while($r=$stmt->fetch(PDO::FETCH_ASSOC)){
        if($row['Username']!=""){
            $pwh=$row['Passwd'];
            if(controllo($uspw,$pwh)){
                $_SESSION['us']=$usna;
                $_SESSION['s']=$row['Squadra'];
            }else{
                $_SESSION['temp']="Password errata";
                header("Location: index.php");
                $db=null;
                die();
            }
        }else{
            $_SESSION['temp']="Nome utente errato o non esistente";
            header("Location: Errore.php");
            $db=null;
            die();
        }
    }
?>
