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
    $pwc=hashpw($uspw);
    $sql="INSERT INTO utenti (Nome,Cognome,Username,Passwd,Email) VALUES(':usna',':ussa',':usni',':pwc',':usem',':sq')";
    $stmt=$db->prepare($sql);
    $stmt->bindParam(':usna',$usna,PDO::PARAM_STR);
    $stmt->bindParam(':ussa',$ussa,PDO::PARAM_STR);
    $stmt->bindParam(':usni',$usni,PDO::PARAM_STR);
    $stmt->bindParam(':pwc',$pwc,PDO::PARAM_STR);
    $stmt->bindParam(':usem',$usem,PDO::PARAM_STR);
    $stmt->execute();
    $sql="SELECT ID_Utente FROM utenti WHERE Username=$usni";
    $stmt=$db->prepare($sql);
    $stmt->execute();
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        if($row['Username']!=""){
                $sql="INSERT INTO seguono (Utente,Squadra) VALUES(':usni',':sq')";
                $stmt->bindParam(':usni',$usni,PDO::PARAM_STR);
                $stmt->bindParam(':sq',$sq,PDO::PARAM_STR);
            }else{
                $_SESSION['temp']="Errore di inserimento";
                header("Location: Errore.php");
                $db=null;
                die();
            }
        }else{
            $_SESSION['temp']="Nome utente errato o non esistente";
            header("Location: Errore.php");
            $db=null;
            die();
        }
?>
