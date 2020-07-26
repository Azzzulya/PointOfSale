<?php $no = 1;
if ($cart->num_rows() > 0) {
    foreach ($cart->result() as $c => $data) { ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data->barcode ?></td>
            <td><?= $data->item_name ?></td>
            <td><?= $this->fungsi->indo_currency($data->cart_price) ?></td>
            <td><?= $data->qty ?></td>
            <td><?= $data->discount_item ?></td>
            <td><?= $this->fungsi->indo_currency($data->total) ?></td>
            <td class="text-center" width="200px;">
                <button id="update_cart" data-target="#modal-item-edit" data-toggle="modal" data-cartid="<?= $data->cart_id ?>" data-barcode="<?= $data->barcode ?>" data-product="<?= $data->item_name ?>" data-price="<?= $data->cart_price ?>" data-qty="<?= $data->qty ?>" data-discount="<?= $data->discount_item ?>" data-total="<?= $data->total ?>" class="btn btn-primary">
                    <i class="fa fa-pencil"></i> Update
                </button>
                <button id="del_cart" data-cartid="<?= $data->cart_id ?>" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Delete
                </button>
            </td>
        </tr>
<?php
    }
} else {
    echo '<tr> <td colspan="8" class="text-center"> Tidak ada item </td> </tr>';
}
?>