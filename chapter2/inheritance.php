<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    
<?php
// require "CheckingAccount.php";

// $checkingAccount = new CheckingAccount();

// $checkingAccount-> deposit(20);
// $checkingAccount->withdraw(10);
// $checkingAccount->transfer(100);

require "PremiumCheckingAccount.php";

$premiumCheckingAccount = new PremiumCheckingAccount();
echo $premiumCheckingAccount -> minimumBalance . "<br>"; 

$premiumCheckingAccount-> deposit(100);
$premiumCheckingAccount-> withdraw(15);
$premiumCheckingAccount-> getBalance();
$premiumCheckingAccount->transfer(1000);

?>
</body>
</html>