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
    require "Comment.php";

    $comment = new Comment('This is a comment', 10);
    // echo $comment->text;
    ?>
<p><?php echo $comment->text . " By " . $comment->userID ?></p>
</body>
</html>