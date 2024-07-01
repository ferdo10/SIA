// review_deposit.php

<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['voucher'] = $_POST['voucher'];
    $_SESSION['step'] = 'enter_pin';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Enter PIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Enter PIN</h1>
        <p class="instructions">Enter your PIN to confirm the deposit.</p>
        <form action="confirm_deposit.php" method="post">
            <input type="hidden" name="voucher" value="<?php echo $_SESSION['voucher']; ?>">
            <label for="pin">PIN:</label>
            <input type="password" id="pin" name="pin" required>
            <button type="submit" class="confirm-btn">Confirm</button>
        </form>
        <form action="insert_bills.php" method="post">
            <button type="submit" class="back-btn">Back</button>
        </form>
    </div>
</body>
</html>