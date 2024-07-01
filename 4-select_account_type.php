// select_account_type.php
<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['deposit'] = $_POST['deposit'];
    $_SESSION['step'] = 'select_account_type';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Account Type</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Select Account Type</h1>
        <form action="select_currency_type.php" method="post">
            <input type="hidden" name="deposit" value="<?php echo $_SESSION['deposit']; ?>">
            <button type="submit" name="account_type" value="own" class="account-btn">Own Account</button>
            <button type="submit" name="account_type" value="bcp" class="account-btn">Other BCP Account</button>
        </form>
        <form action="choose_deposit_option.php" method="post">
            <button type="submit" class="back-btn">Back</button>
        </form>
    </div>
</body>
</html>

