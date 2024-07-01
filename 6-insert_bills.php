// insert_bills.php
<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['currency'] = $_POST['currency'];
    $_SESSION['step'] = 'insert_bills';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Bills</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Insert Bills</h1>
        <p class="instructions">Follow the instructions to insert the bills correctly.</p>
        <form action="review_deposit.php" method="post">
            <input type="hidden" name="currency" value="<?php echo $_SESSION['currency']; ?>">
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>
            <button type="submit" class="continue-btn">Continue</button>
        </form>
        <form action="select_currency_type.php" method="post">
            <button type="submit" class="back-btn">Back</button>
        </form>
    </div>
</body>
</html>
