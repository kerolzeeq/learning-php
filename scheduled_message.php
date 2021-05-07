<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduled Message</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    $dayofweek = date("w");
    
    $today="";
    switch ($dayofweek){
        case 0: $today="Sunday"; break;
        case 1: $today="Monday"; break;
        case 2: $today="Tuesday"; break;
        case 3: $today="Wednesday"; break;
        case 4: $today="Thursday"; break;
        case 5: $today="Friday"; break;
        case 6: $today="Saturday"; break;
    }
    $times = (date("g")+6).":".date("i").":".date("s");
    echo "<p>Today is $today $times </p>";
    echo date("d/m/y : H:i:s", time());
?>
    
</body>
</html>