<!DOCTYPE html>

<head>
    <title>Barcode Product <?= $row->barcode ?></title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <img style="width:200px" src="uploads/qr-code/item-<?= $row->item_id ?>.png" alt="">
    <br>
    <?php echo $row->barcode ?>
</body>

</html>