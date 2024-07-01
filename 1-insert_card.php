// insert_card.php
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insertar Tarjeta</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Insertar Tarjeta</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="hidden" name="action" value="insert_card">
            <label for="card_number">Numero de Tarjetar:</label>
            <input type="text" id="card_number" name="card_number" required>
            <label for="expiry_date">Fecha de caducidad:</label>
            <input type="text" id="expiry_date" name="expiry_date" required>
            <label for="card_holder">Titular de la tarjeta:</label>
            <input type="text" id="card_holder" name="card_holder" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>




























