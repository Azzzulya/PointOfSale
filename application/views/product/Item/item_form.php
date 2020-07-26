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
    <?php $this->view('message') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= ucfirst($page) ?> item</h3>
            <div class="pull-right">
                <a href="<?= site_url("item") ?>" class="btn btn-warning">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('item/process') ?>
                    <div class="form-group">
                        <label for="">Barcode*</label>
                        <input type="hidden" name="id" value="<?= $row->item_id ?>">
                        <input type="text" name="barcode" value="<?= $row->barcode ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Product Name*</label>
                        <input type="text" name="product_name" value="<?= $row->name ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Category*</label>
                        <select name="category" class="form-control">
                            <option value="">- Pilih -</option>
                            <?php foreach ($category->result() as $key => $data) { ?>
                                <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Unit*</label>
                        <?php echo form_dropdown(
                            'unit',
                            $unit,
                            $selectedunit,
                            ['class' => 'form-control', 'required' => 'required']
                        ) ?>
                    </div>
                    <div class="form-group">
                        <label for="">Price*</label>
                        <input type="number" name="price" value="<?= $row->price ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Image*</label>
                        <?php if ($page == 'edit') {
                            if ($row->image != null) { ?>
                                <div style="margin-bottom: 10px">
                                    <img src="<?= base_url('uploads/products/' . $row->image) ?>" style="width:80%" alt="">
                                </div>
                        <?php    }
                        } ?>
                        <input type="file" name="image" class="form-control">
                        <small>Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?> !</small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-success btn-flat">Reset</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>

        </div>
    </div>
</section>