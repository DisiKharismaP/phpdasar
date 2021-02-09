<?php

$number = [1,2,3,4,5,6,7,8,9,0,6,6];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan pada Array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>

    <!-- pengulangan for -->
    <?php for($i = 0; $i < 7; $i++){ ?>
        <div class="kotak"><?php echo $number[$i];?> </div>
    <?php } ?>

    <!-- baris baru -->
    <div class="clear"></div>

    <!-- cara singkat -->
    <?php for($i = 0; $i < count($number); $i++): ?>
        <div class="kotak"><?= $number[$i];?> </div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- pengulangan foreach lebih simple dan mudah -->
    <?php foreach($number as $n){?>
        <div class="kotak"> <?php echo $n?> </div>
    <?php }?>

    <div class="clear"></div>

    <!-- cara singkat -->
    <?php foreach($number as $n):?>
        <div class="kotak"> <?= $n?> </div>
    <?php endforeach; ?>

</body>
</html>