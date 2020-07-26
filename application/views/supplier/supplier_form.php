<section class="content-header">
    <h1>
        Supplier
        <small>Supplier Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
</section>
<!-- main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?= ucfirst($page) ?> Supplier</h3>
            <div class="pull-right">
                <a href="<?= site_url("supplier") ?>" class="btn btn-warning">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class="box-body ">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php
                    // echo validation_errors(); 
                    ?>
                    <form action="<?= site_url('supplier/process') ?>" method="post">
                        <div class="form-group">
                            <label for="">Supplier Name*</label>
                            <input type="hidden" name="id" value="<?= $row->supplier_id ?>">
                            <input type="text" name="supplier_name" value="<?= $row->name ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone*</label>
                            <input type="text" name="phone" value="<?= $row->phone ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address*</label>
                            <textarea type="text" name="address" class="form-control" required> <?= $row->address ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description*</label>
                            <textarea type="text" name="description" class="form-control" required><?= $row->description ?> </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-success btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>