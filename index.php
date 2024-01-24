<?php

// Includi il file con le funzioni
include('functions.php');

// Verifica se la lunghezza della password è specificata nella richiesta GET
if (isset($_GET['legth']))
{
     // Imposta la lunghezza della password dalla richiesta GET
     $passwordLength = intval($_GET['legth']);

     // Genera la password casuale
     $genPws = genPsw ($passwordLength);
}
else
{
    // Imposta la lunghezza predefinita se non specificata
    $passwordLength = 12;
    $genPws = genPsw ($passwordLength);
}

?>



<!DOCTYPE html>

<html>
    <body>
        <h1>PASSWORD GENERETOR</h1>

        <!-- Form per l'input della lunghezza della password -->
          <!-- Form per l'input della lunghezza della password -->
          <form action="index.php" method="GET">
            <!-- Pulsante di invio del form -->
            <input type="submit" value="Genera Password">
        </form>

        <!-- Visualizza la password generata -->
        <?php if (!empty($genPws)): ?>
            <p><strong>Password Generata:</strong> <?php echo $genPws                 ; ?></p>
        <?php endif; ?>
        
        
    </body>
</html>