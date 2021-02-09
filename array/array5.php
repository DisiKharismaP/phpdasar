
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>

    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: grey;
            text-align: center;
            line-height: 30px;
            float: left;
            transition: 0.5s;
            margin: 3px;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>

</head>
<body>

    <?php $angka=[1,2,3,4,5,6,7,8]?>
    <?php foreach($angka as $a):?>
        <div class="kotak"> <?= $a?> </div>
    <?php endforeach;?>

    <div class="clear"></div>

    <?php $number=[
        [1,2,3],
        [4,5,6],
        [7,8,9],
    ]; ?>
    <?php foreach($number as $nbr): ?>
        <?php foreach($nbr as $n):?>
            <div class="kotak"><?= $n ?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>


</body>
</html>