// select_currency_type.php
<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['account_type'] = $_POST['account_type'];
    $_SESSION['step'] = 'select_currency_type';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Currency Type</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Select Currency Type</h1>
        <form action="insert_bills.php" method="post">
            <input type="hidden" name="account_type" value="<?php echo $_SESSION['account_type']; ?>">
            <button type="submit" name="currency" value="soles" class="currency-btn">Soles</button>
            <button type="submit" name="currency" value="dollars" class="currency-btn">Dollars</button>
        </form>
        <form action="select_account_type.php" method="post">
            <button type="submit" class="back-btn">Back</button>
        </form>
    </div>
</body>
</html>
