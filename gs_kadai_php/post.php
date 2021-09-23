<?php

$name = $_POST['name'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$other = $_POST['other'];


?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body{
            text-align: center;
        }
        ul{
            list-style: none;
        }
    </style>
</head>
<body>
    <p>Name: <?php echo $name ?></p>
    <p>Address: <?php echo $address ?></p>
    <p>Phone Number: <?php echo $tel ?></p>
    <p>Details of your inquiry : <?php echo $other ?></p>
    <button onclick="location.href='./index.php'">Back</button>
    <button onclick="location.href='./write.php'">Register</button>
</body>
</html>
