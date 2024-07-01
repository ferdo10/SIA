// confirm_deposit.php
<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pin = $_POST['pin'];
    $dni = $_SESSION['dni'];
    $amount = $_SESSION['amount'];
    $voucher = $_SESSION['voucher'];
    $account_type = $_SESSION['account_type'];
    $currency = $_SESSION['currency'];

    // Validate PIN (you will need to implement actual PIN validation logic)
    // For now, we assume the PIN is always correct
    if ($pin == "1234") {  // Replace this with actual PIN validation logic
        // Insert deposit into database
        $query = $db->prepare("INSERT INTO deposits (dni, amount, voucher, account_type, currency, pin) VALUES (:dni, :amount, :voucher, :account_type, :currency, :pin)");
        $query->execute([
            ':dni' => $dni,
            ':amount' => $amount,
            ':voucher' => $voucher,
            ':account_type' => $account_type,
            ':currency' => $currency,
            ':pin' => $pin
        ]);

        // Redirect to successful deposit page
        header("Location: success_deposit.php");
        exit();
    } else {
        // Handle incorrect PIN (optional)
        echo "Invalid PIN. Please try again.";
    }
}
?>

