<section class="content-header">
    <h1>
        Category
        <small>Category Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Category</li>
    </ol>
</section>
<!-- main content -->
<section class="content">
    <?php $this->view('message') ?>

    <div class="box">
        <div class="box-header">

            <h3 class="box-title">Data category</h3>
            <div class="pull-right">
                <a href="<?= site_url("category/add") ?>" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i>Create New
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">

            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data->name ?></td>

                            <td class="text-center" width="160px">
                                <a href="<?= site_url('category/edit/' . $data->category_id) ?>" class="btn btn-warning">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="<?= site_url('category/del/' . $data->category_id) ?>" onclick="return confirm('Apakah anda yakin')" class="btn btn-danger">
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