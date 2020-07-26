<section class="content-header">
    <h1>
        Sales
        <small>Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Transaction</li>
        <li class="active">Sales</li>
    </ol>
</section>
<!-- main content -->
<section class="content">

    <div class="row">
        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%;">
                                <label for="date">Date</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" id="date" value="<?= date('Y-m-d') ?>" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; width:30%;">
                                <label for="Kaisr">Kasir</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" id="user" value="<?= $this->fungsi->user_login()->name ?>" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:top">
                                <label for="customer">Customer</label>
                            </td>
                            <td>
                                <div>
                                    <select class="form-control" id="customer">
                                        <option value="">Umum</option>
                                        <?php foreach ($customer as $cust => $value) {
                                            echo '<option value="' . $value->customer_id . '">' . $value->name . '</option>';
                                        } ?>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align:top; width:30%;">
                                <label for="barcode">Barcode</label>
                            </td>
                            <td>
                                <div class="form-group input-group">
                                    <input type="hidden" id="item_id">
                                    <input type="hidden" id="price">
                                    <input type="hidden" id="stock">
                                    <input type="text" id="barcode" class="form-control" autofocus>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="qty">Qty</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="qty" value="1" min="1" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div>
                                    <button type="button" id="add_cart" class="btn btn-primary">
                                        <i class="fa fa-cart-plus"></i> Add
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <div align="right">
                        <h4>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h4>
                        <h1><b><span id="grand_total2" style="font-size: 50pt;">0</span></b></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-widget">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Barcode</th>
                                <th>Product Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th width="10%;">Discount Item</th>
                                <th width="15%;">Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="cart_table">
                            <?php $this->view('transaction/sale/cart_data') ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top; width:30%;">
                                <label for="sub_total">Sub Total</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="sub_total" value="" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="discount">Discount</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="discount" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="change"> Change</label>
                            </td>
                            <td>
                                <div>
                                    <input type="number" id="change" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="cash">Cash</label>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="number" id="cash" value="0" min="0" class="form-control">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="change">Change</label>
                            </td>
                            <td>
                                <div>
                                    <input type="number" id="change" class="form-control" readonly>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                    <table width="100%">
                        <tr>
                            <td style="vertical-align: top;">
                                <label for="note">Note</label>
                            </td>
                            <td>
                                <div>
                                    <textarea id="note" rows="3" class="form-control"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>

        <div class="col-lg-3">
            <div>
                <button id="cancel_payment" class="btn btn-flat btn-warning">
                    <i class="fa fa-refresh"></i> Cancel
                </button> <br><br>
                <button class="btn btn-flat btn-lg btn-success" id="process_payment">
                    <i class="fa fa-paper-plane-o"></i> Process Payment
                </button>
            </div>
        </div>
    </div>
</section>


<!-- MODAL ITEM -->
<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Add Sale Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped text-center" id="table1">
                    <thead>
                        <tr>
                            <th>Barcode</th>
                            <th>Name</th>
                            <th>Unit</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($item as $i => $data) { ?>
                            <tr>
                                <td><?= $data->barcode ?></td>
                                <td><?= $data->name ?></td>
                                <td><?= $data->unit_name ?></td>
                                <td><?= $data->stock ?></td>
                                <td><?= $this->fungsi->indo_currency($data->price) ?></td>
                                <td>
                                    <button class="btn btn-primary" id="select" data-id="<?= $data->item_id ?>" data-barcode="<?= $data->barcode ?>" data-price="<?= $data->price ?>" data-stock="<?= $data->stock ?>">
                                        <i class="fa fa-check"></i> Select
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL ITEM -->


<!-- MODAL ITEM EDIT -->
<div class="modal fade" id="modal-item-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Update Product Item</h4>
            </div>
            <div class="modal-body ">
                <input type="hidden" id="cartid_item">
                <div class="form-group">
                    <label for="product_item">Product Item</label>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" id="barcode_item" class="form-control" readonly>
                        </div>
                        <div class="col-md-7">
                            <input type="text" id="product_item" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price_item">Price</label>
                    <input type="text" id="price_item" class="form-control">
                </div>
                <div class="form-group">
                    <label for="qty_item">Quantity</label>
                    <input type="number" id="qty_item" min="1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="total_before">Total before discount</label>
                    <input type="text" id="total_before" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="discount_item">Discount per Item</label>
                    <input type="text" id="discount_item" min="0" class="form-control">
                </div>
                <div class="form-group">
                    <label for="total_item">Total after discount</label>
                    <input type="text" id="total_item" class="form-control" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <div class="pull-right">
                    <button id="edit_cart" class="btn btn-flat btn-success" type="button">
                        <i class="fa fa-paper-plane-o"> </i> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end MODAL ITEM EDIT -->


<script>
    $(document).on('click', '#select', function() {
        $('#item_id').val($(this).data('id'))
        $('#barcode').val($(this).data('barcode'))
        $('#price').val($(this).data('price'))
        $('#stock').val($(this).data('stock'))
        $('#modal-item').modal('hide')
    })


    $(document).on('click', '#add_cart', function() {
        let item_id = $('#item_id').val()
        let price = $('#price').val()
        let stock = $('#stock').val()
        let qty = $('#qty').val()
        if (item_id == '') {
            alert('Production belum dipilih')
            $('#barcode').focus()
        } else if (stock < 1) {
            alert('Stock tidak mencukupi')
            $('#item_id').val('')
            $('#barcode').val('')
            $('#barcode').focus()
        } else {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('sale/process') ?>',
                data: {
                    'add_cart': true,
                    'item_id': item_id,
                    'price': price,
                    'qty': qty
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {

                        })
                        $('#item_id').val('')
                        $('#barcode').val('')
                        $('#qty').val(1)
                        $('#barcode').focus()
                    } else {
                        alert('Gagal tambah item chart');
                    }
                }
            })
        }
    })

    $(document).on('click', '#del_cart', function() {
        if (confirm('yakin hapus data ?')) {
            var cart_id = $(this).data('cartid')
            $.ajax({
                type: 'POST',
                url: '<?= site_url('sale/cart_del') ?>',
                dataType: 'json',
                data: {
                    'cart_id': cart_id
                },
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {

                        })
                    } else {
                        alert('Gagal hapus item cart')
                    }
                }
            })
        }
    })


    $(document).on('click', '#update_cart', function() {
        $('#cartid_item').val($(this).data('cart_id'))
        $('#barcode_item').val($(this).data('barcode'))
        $('#product_item').val($(this).data('product'))
        $('#price_item').val($(this).data('price'))
        $('#qty_item').val($(this).data('qty'))
        $('#total_before').val($(this).data('price') * $(this).data('qty'))
        $('#discount_item').val($(this).data('discount'))
        $('#total_item').val($(this).data('total'))
    })

    function count_edit_modal() {
        let price = $('#price_item').val()
        let qty = $('#qty_item').val()
        let discount = $('#discount_item').val()

        total_before = price * qty
        $('#total_before').val(total_before)

        total = (price - discount) * qty
        $('#total_item').val(total)
    }

    $(document).on('keyup mouseup', '#price_item, #qty_item, #discount_item', function() {
        count_edit_modal()
    })

    $(document).on('click', '#edit_cart', function() {
        let cart_id = $('#cartid_item').val()
        let price = $('#price_item').val()
        let qty = $('#qty_item').val()
        let discount = $('#discount_item').val()
        let total = $('#total_item').val()
        if (price == '' || price < 1) {
            alert('Harga tidak boleh kosong')
            $('#price_item').focus()
        } else if (qty == '' || qty < 1) {
            alert('Qty tdak boleh kosong')
            $('#qty_id').focus()
        } else if (discount == '') {
            $('#discount_item').val(0)
        } else {
            $.ajax({
                type: 'POST',
                url: '<?= site_url('sale/process') ?>',
                data: {
                    'edit_cart': true,
                    'cart_id': cart_id,
                    'price': price,
                    'qty': qty,
                    'discount': discount,
                    'total': total
                },
                dataType: 'json',
                success: function(result) {
                    if (result.success == true) {
                        $('#cart_table').load('<?= site_url('sale/cart_data') ?>', function() {

                        })
                        alert('Data item cart  ter-update');
                        $('#modal-item-edit').modal('hide');
                    } else {
                        alert('Data item cart tidak terupdate');
                    }
                }
            })

        }
    })
</script>