<section class="content-header">
    <h1>
        Items
        <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Data Barang</li>
    </ol>
</section>
<!-- main content -->
<section class="content">
    <?php $this->view('message') ?>

    <div class="box">
        <div class="box-header">

            <h3 class="box-title">Data Product Item</h3>
            <div class="pull-right">
                <a href="<?= site_url("item/add") ?>" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i>Create Product Item
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">

            <table class="table table-bordered table-striped" id="tableItem">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php
                            $no = 1;
                            foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:5px"><?= $no++ ?>.</td>
                            <td class="text-center">
                                <?= $data->barcode ?>
                                <br>
                                <a href="<?= site_url('item/barcode_qrcode/' . $data->item_id) ?>" class="btn btn-default btn-xs">
                                    <i class="fa fa-barcode"></i>Generate
                                </a>
                            </td>

                            <td><?= $data->name ?></td>
                            <td><?= $data->category_name ?></td>
                            <td><?= $data->unit_name ?></td>
                            <td><?= $data->price ?></td>
                            <td><?= $data->stock ?></td>
                            <td>
                                <?php if ($data->image != null) { ?>
                                    <img src="<?= base_url('uploads/products/' . $data->image) ?>" style="width:100px">
                                <?php } ?>
                            </td>


                            <td class="text-center" width="160px">
                                <a href="<?= site_url('item/edit/' . $data->item_id) ?>" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="<?= site_url('item/del/' . $data->item_id) ?>" onclick="return confirm('Apakah anda yakin')" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?> -->
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#tableItem').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= site_url('item/get_ajax') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                    "targets": [5, 6],
                    "className": 'text-right'
                },
                {
                    "targets": [0, 1, 7, -1],
                    "className": 'text-center'
                },
                {
                    "targets": [0, 7, -1],
                    "orderable": false
                }
            ]
        });

    });
</script>