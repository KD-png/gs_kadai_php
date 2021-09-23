<?php

$name = $_POST['name'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$other = $_POST['other'];

//文字作成
$str = $name . '/' . $address . '/' . $tel . '/' . $other . "\n";

$file = fopen('data/data.txt', 'a');
fwrite($file, $str);
fclose($file); 
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
                padding: 50px;
                font-weight: bold;
                font-size: 15px;
                margin-top: 20px;
            }
        </style>
    </head>
<body>
<ul>
    <li><a href="read.php">Check</a></li>
    <li><a href="post.php">Back</a></li>
</ul>
</body>
</html>
