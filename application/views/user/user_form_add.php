<section class="content-header">
    <h1>
        Dashboard
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url("dashboard") ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
</section>
<!-- main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Users</h3>
            <div class="pull-right">
                <a href="<?= site_url("user") ?>" class="btn btn-warning">
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
                    <form action="" method="post">
                        <div class="form-group <?= form_error('fullname') ? "has-error" : null ?>">
                            <label for="">Name*</label>
                            <input type="text" name="fullname" value="<?= set_value('fullname') ?>" class="form-control">
                            <span class="help-block"> <?= form_error('fullname') ?> </span>
                        </div>
                        <div class="form-group <?= form_error('username') ? "has-error" : null ?>">
                            <label for="">Username*</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control">
                            <span class="help-block"><?= form_error('username') ?></span>
                        </div>
                        <div class="form-group <?= form_error('password') ? "has-error" : null ?>">
                            <label for="">Password*</label>
                            <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control">
                            <span class="help-block"><?= form_error('password') ?></span>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? "has-error" : null ?>">
                            <label for="">Password Confirmation*</label>
                            <input type="password" name="passconf" value="<?= set_value('passconf') ?>" class="form-control">
                            <span class="help-block"><?= form_error('passconf') ?></span>
                        </div>
                        <div class="form-group <?= form_error('adress') ? "has-error" : null ?>">
                            <label for="">Adress*</label>
                            <textarea name="adress" class="form-control"><?= set_value('adress') ?> </textarea>
                            <span class="help-block"><?= form_error('adress') ?></span>
                        </div>
                        <div class="form-group <?= form_error('level') ? "has-error" : null ?>">
                            <label for="">Level</label>
                            <select name="level" class="form-control">
                                <option value="">Pilih</option>
                                <option value="1" <?= set_value('level') == 1 ? "selected" : null ?>>Admin</option>
                                <option value="2" <?= set_value('level') == 2 ? "selected" : null ?>>Kasir</option>
                            </select>
                            <span class="help-block"> <?= form_error('level') ?> </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save</button>
                            <button type="reset" class="btn btn-success btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>