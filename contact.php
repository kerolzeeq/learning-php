<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>
    <?php
        echo $_SESSION['username'];
    ?>
</body>
</html>