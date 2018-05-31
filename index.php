<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!--Direttiva che permette che il contnuto di adatti al dispositivo-->
        <meta nome="viewport" content="width=device-width, initial=scale=1, shink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stlesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!--Funzione per il controllo delle l'inseriemnto di tutti i valor in modo corretto all'interno delle caselle-->
        <script>
            function ctrlData(){
                var n=0;
                if(document.getElementById("us").value!="")
                 n++;
                if(document.getElementById("pw").value!="")
                 n++;
                if(n!=2)
                 document.getElementById("sub").disabled=true;
                else
                 document.getElementById("sub").disabled=false;
            }
        </script>
        <title>Login</title>
    </head>
    <body style="background-color:powderblue;" class="text-center" onload="ctrlData()">
        <!--Impostazioni CSS in modo che gli elementi della pagina siano posti al centro-->
        <div style="margin: 0; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h2><?php echo "".$_SESSION["temp"]."" ?></h2>
            <form class="form-signin" action="Login.php" method="POST">
    			<h1 class="h3 mb-3 font-weigth-normal">Login</h1>
                <!--Nome Utente-->
                <div class="container">
    				<label for="us" class="sr-only">Nome Utente</label>
    				<input class="form-control" type="text" id="us" name="us" placeholder="Inserire il nome utente" value="" onchange="ctrlData()" autofocus/>
    			</div>
                <!--Password-->
    			<div class="container">
    				<label for="pw" class="sr-only">Password</label>
    				<input class="form-control" type="password" id="pw" name="pw" placeholder="Inserire la password" onchange="ctrlData()" value=""/>
    			</div>
                <!--Submit e link-->
                <input class="btn btn-primary" type="submit" id="sub" name="sub" value="Accedi">
                <br/>
                <button class="btn btn-link" name="but" onclick="location.href='./Registrazione.php'">Registrati</button>
    		</form>
        </div>
    </body>
</html>
