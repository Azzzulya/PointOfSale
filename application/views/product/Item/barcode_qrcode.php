<section class="content-header">
    <h1>
        Items
        <small>Item Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Items</li>
    </ol>
</section>
<!-- main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Barcode Generator</h3>
            <div class="pull-right">
                <a href="<?= site_url("item") ?>" class="btn btn-warning">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <?php
            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img style="width:200px" src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';
            ?>
            <br>
            <?php echo $row->barcode ?>
            <br>
            <a href="<?= site_url('item/barcode_print/' . $row->item_id) ?>" class="btn btn-default btn-xs" target="_blank">
                <i class="fa fa-print"></i>Print
            </a>
        </div>
    </div>

    <div class="box ">
        <div class="box-header">
            <h3 class="box-title">Qrcode Generator</h3>
        </div>
        <div class="box-body ">
            <?php
            $qrCode = new Endroid\QrCode\QrCode($row->item_id);
            $qrCode->writeFile('./uploads/qr-code/item-' . $row->item_id . '.png');
            ?>
            <img style="width:200px" src="<?= base_url('./uploads/qr-code/item-' . $row->item_id . '.png') ?>" alt="">
            <br>
            <?php echo $row->barcode ?>
            <br>
            <a href="<?= site_url('item/qrcode_print/' . $row->item_id) ?>" class="btn btn-default btn-xs" target="_blank">
                <i class="fa fa-print"></i>Print
            </a>
        </div>
    </div>
</section>