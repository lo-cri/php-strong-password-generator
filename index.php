<!-- Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->

<?php
   if( isset($_GET["password"]) ) {

        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!?@#";
        $pass = "";
        for ($i = 0; $i < $_GET["password"]; $i++) {
            $n = rand(0, strlen($alphabet) - 1);
            $pass .= $alphabet[$n];
        }
        echo "Your password is" . ' ' . $pass;
        // return $pass;
      
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
</head>
<body>
    
    <form action = "<?php $_PHP_SELF ?>" method = "GET">
        Di quanti caratteri vuoi la password?
        <input type = "number" name = "password" />
        <input type = "submit" pattern="[0-9]" placeholder="invia" />
    </form>


</body>
</html>