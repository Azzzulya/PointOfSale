<section class="content-header">
    <h1>
        Stock In
        <small>Barang Masuk /Pembelian</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Transaction</li>
        <li class="active">Stock In</li>
    </ol>
</section>
<!-- main content -->
<section class="content">
    <?php $this->view('message') ?>
    <div class="box">
        <div class="box-header">

            <h3 class="box-title">Stock In</h3>
            <div class="pull-right">
                <a href="<?= site_url("stock/in/add") ?>" class="btn btn-primary">
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
                            <td><?= $this->fungsi->indo_date($data->date) ?></td>
                            <td class="text-center" width="160px">
                                <a id="set_detail" class="btn btn-default " data-toggle="modal" data-target="#modal-detail" data-barcode="<?= $data->barcode ?>" data-itemname="<?= $data->item_name ?>" data-detail="<?= $data->detail ?>" data-suppliername="<?= $data->supplier_name ?>" data-qty="<?= $data->qty ?>" data-date="<?= $this->fungsi->indo_date($data->date) ?>">
                                    <i class="fa fa-eye"></i>Detail
                                </a>
                                <a href="<?= site_url('stock/in/del/' . $data->stock_id . '/' . $data->item_id)  ?>" onclick="return confirm('Apakah anda yakin')" class="btn btn-danger">
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


<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Stock In Detail</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <tbody>
                        <tr>
                            <th>Barcode</th>
                            <td><span id="barcode"></span></td>
                        </tr>
                        <tr>
                            <th>Item Name</th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><span id="detail"></span></td>
                        </tr>
                        <tr>
                            <th>Supplier Name</th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td><span id="qty"></span></td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td><span id="date"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click', '#set_detail', function() {
            var barcode = $(this).data('barcode');
            var itemname = $(this).data('itemname');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');

            $('#barcode').text(barcode);
            $('#item_name').text(itemname);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
            $('#detail').text(detail);


        })
    })
</script>