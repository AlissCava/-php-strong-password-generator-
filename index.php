<?php
// Funzione per generare una password casuale
function genPsw ($leght)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $password = '';

    for ($i = 0; $i < $leght; $i++){
        $password .= $characters[rand(0, strlen($characters) -1)];
    }

    return $password;
}

// Verifica se la lunghezza della password è specificata nella richiesta GET
if (isset($_GET['lkegth']))
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
        <form action="index.php" method="GET">
            <label for="length">Lunghezza della Password:</label>

            <!-- Input di tipo numero con vincoli di lunghezza -->
            <input type="number" name="length" id="length" min="6" max="30" value="
            <?php echo $passwordLength; ?>
            " required>

            <!-- Pulsante di invio del form -->
            <input type="submit" value="Genera Password">
        </form>

        <!-- Visualizza la password generata solo se è stata generata -->

        <?php 
             if (isset($genPws)):
        ?>

        <!-- Paragrafo con la password generata in grassetto -->
        <p><strong>Password Generata:</strong> 
        <?php 
            echo $generatedPassword; 
        ?>
        </p>

        <?php 
            endif; 
        ?>
        
    </body>
</html>