<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// require "Account.php";

// $account = new Account();
// $account->deposit(50);
// $account->withdraw(20);
// $account->transfer(300); //this is not inherited


// 
// require "CheckingAccount.php";
// $account = new CheckingAccount();
// $account->deposit(100);
// $account->withdraw(20);
// $account->transfer(200);

require "PremiumCheckingAccount.php";
$premiumCheckingAccount = new PremiumCheckingAccount();
echo $premiumCheckingAccount->minimumBalance . "<br>";
$premiumCheckingAccount->deposit(101);
$premiumCheckingAccount->withdraw(100);
$premiumCheckingAccount->transfer(120);
?>
</body>
</html>