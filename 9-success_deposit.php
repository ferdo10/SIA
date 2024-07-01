// success_deposit.php
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deposit Successful</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Deposit Successful</h1>
        <p>Amount: <?php echo $_SESSION['amount']; ?></p>
        <p>Voucher: <?php echo $_SESSION['voucher']; ?></p>
        <p class="message">Thank you for banking with us!</p>
        <form action="insert_card.php" method="post">
            <button type="submit" class="start-btn">Start New Transaction</button>
        </form>
    </div>
</body>
</html>

