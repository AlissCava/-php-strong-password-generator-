<?php
// Includi il file con le funzioni
include('functions.php');

// Verifica se la lunghezza della password è specificata nella richiesta GET
if (isset($_GET['length'])) {
    // Imposta la lunghezza della password dalla richiesta GET
    $passwordLength = intval($_GET['length']);

    // Genera la password casuale
    $generatedPassword = generatePassword($passwordLength);
} else {
    // Imposta la lunghezza predefinita se non specificata
    $passwordLength = 12;
    $generatedPassword = generatePassword($passwordLength);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>

    <!-- Form per l'input della lunghezza della password -->
    <form action="index.php" method="GET">
        <label for="length">Lunghezza della Password:</label>
        <input type="number" name="length" id="length" min="6" max="30" value="<?php echo $passwordLength; ?>" required>
        <input type="submit" value="Genera Password">
    </form>

    <!-- Visualizza la password generata -->
    <?php if (!empty($generatedPassword)): ?>
        <p><strong>Password Generata:</strong> <?php echo $generatedPassword; ?></p>
    <?php endif; ?>
</body>
</html>
