<section class="content-header">
    <h1>
        Stock Out
        <small>Barang Keluar, Rusak, Hilang, etc</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Transaction</li>
        <li class="active">Stock Out</li>
    </ol>
</section>
<!-- main content -->
<section class="content">
    <?php $this->view('message') ?>
    <div class="box">
        <div class="box-header">

            <h3 class="box-title">Stock Out</h3>
            <div class="pull-right">
                <a href="<?= site_url("stock/out/add") ?>" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i>Add Stock in
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Product Item</th>
                        <th>Quantity</th>
                        <th>Info</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?= $no++ ?>.</td>
                            <td><?= $data->barcode ?></td>
                            <td><?= $data->item_name ?></td>
                            <td><?= $data->qty ?></td>
                            <td><?= $data->detail ?></td>
                            <td><?= $this->fungsi->indo_date($data->date) ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('stock/out/del/' . $data->stock_id . '/' . $data->item_id)  ?>" onclick="return confirm('Apakah anda yakin')" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>