<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility</title>
</head>
<body>
<?php
require "FileReader.php";

$fileReader = new FileReader();


?>

<p><?php echo $fileReader->getData();   ?></p>
</body>
</html>