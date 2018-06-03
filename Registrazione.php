<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<meta nome="viewport" content="width=device-width, initial=scale=1, shink-to-fit=no">
		<link rel="stlesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script>
            var n=0; //Variabilie globale
            //Funzione per il controllo del contenuto degli elementi
            function ctrlData(){
                n=0;
                if (document.getElementById("n").value!="")
                 n++;
                if (document.getElementById("c").value!="")
                 n++;
                if (document.getElementById("un").value!="")
                 n++;
                if (document.getElementById("em").value!="")
                 n++;
                if (document.getElementById("pw").value!="")
                 n++;
                if (document.getElementById("ctrlpw").value!="")
                 n++;
                if(n!=7)
                 document.getElementById("sub").disabled=true;
                else
                 document.getElementById("sub").disabled=false;
            }
            /*function nomiSquadre(str){
                if(document.getElementById("sq").value!="")
                 n++;
                if(n!=7)
                 document.getElementById("sub").disabled=true;
                else
                 document.getElementById("sub").disabled=false;
                if(str.length==0){
                    document.getElementById("livesearch").innerHTML="";
                    return;
                }
                if(window.XMLHttpRequest){
                    xh=new XMLHttpRequest();
                }else{
                    xmlhttp=new ActiveXObject();
                }*/
            }
        </script>
        <title>Registrazione</title>
    </head>
    <body style="background-color:powderblue;" class="text-center" onload="ctrlData()">
        <form class="form-signin" action="NuovoUtente.php" method="POST">
            <h1 class="h2 mb-2 font-weigth-normal">Registrazione nuovo utente</h1>
            <div class="container">
				<label for="n">Nome</label>
				<input class="form-control" type="text" id="n" name="n" placeholder="Inserire il nome" onchange="ctrlData()" value="">
			</div>
            <div class="container">
				<label for="c">Cognome</label>
				<input class="form-control" type="text" id="c" name="c" placeholder="Inserire il cognome" onchange="ctrlData()" value="">
			</div>
            <div class="container">
				<label for="un">Username</label>
				<input class="form-control" type="text" id="un" name="un" placeholder="Inserire lo username" onchange="ctrlData()" value="">
			</div>
            <div class="container">
				<label for="sq">Squadra preferita</label>
				<input class="form-control" type="text" id="sq" name="sq" placeholder="Inserire la squadra che si vuole segurire" onkeyup="" value="">
			</div>
            <div id="livesearch"></div>
            <div class="container">
				<label for="em">Email</label>
				<input class="form-control" type="text" id="em" name="em" placeholder="Inserire l'email" onchange="ctrlData()" value="">
			</div>
			<div class="container">
                <label for="pw">Password</label>
				<input class="form-control" type="password" id="pw" name="pw" placeholder="Inserire al password" onchange="ctrlData()" value="">
			</div>
			<div class="container">
				<label for="ctrlpw">Password di controllo</label>
				<input class="form-control" type="password" id="crtlpw" name="ctrlpw" placeholder="Reinserire la password" value="">
			</div>
			<div class="container">
				<input class="btn btn-primary" type="submit" id="sub" name="sub" value="Registrati">
			</div>
        </form>
    </body>
</html>
