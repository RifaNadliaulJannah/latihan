<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar 3</title>
    <style>
         .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 5px;
            margin: 50px;
        }
        .row {
            display: flex;
            gap: 5px;
        }
        .box {
            width: 40px;
            height: 40px;
            border: 2px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
        }
      </style>
</head>
<body>
    

<?php
$a = 'A' ;
$b = 'B' ;
$c = 'C' ;
?>

<div class="container">
    <div class="row">
        <div class="box"><?= $a; ?></div>
    </div>
    <div class="row">
        <div class="box"><?= $a; ?></div>
        <div class="box"><?= $b; ?></div>
    </div>
    <div class="row">
        <div class="box"><?= $a; ?></div>
        <div class="box"><?= $b; ?></div>
        <div class="box"><?= $c; ?></div>
    </div>
</div>

</body>
</html>
