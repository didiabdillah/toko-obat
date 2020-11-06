<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Add Data</strong>
        </div>
        <div class="card-body card-block">
            <?php
            if (@$error) {
                echo '<div class="alert alert-danger">' . $error . '</div>';
            }
            ?>
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col col-md-2"><label for="nama" class=" form-control-label">Name</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="nama" name="nama" placeholder="Nama Obat..." class="form-control" value="<?= set_value('nama'); ?>">
                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="harga" class=" form-control-label">Price</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="harga" name="harga" placeholder="Harga Obat..." class="form-control" value="<?= set_value('harga'); ?>">
                        <?php echo form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="banyak" class=" form-control-label">Quantity</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="banyak" name="banyak" placeholder="Banyak Stock Obat..." class="form-control" value="<?= set_value('banyak'); ?>">
                        <?php echo form_error('banyak', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <!-- <div class=" col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="desc" class=" form-control-label">Description</label></div>
                    <div class="col-12 col-md-10">
                        <textarea id="desc" name="desc" placeholder="Deskripsi..." class="form-control"><?= set_value('desc'); ?></textarea>
                        <?php echo form_error('desc', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="gambar" class=" form-control-label">Image</label></div>
                    <div class="col-12 col-md-10">
                        <input type="file" id="gambar" name="gambar" placeholder="Banyak Stock Obat..." class="form-control">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-md">
                        <i class="fa fa-dot-circle-o"></i> Save
                    </button>
                    <button type="reset" class="btn btn-danger btn-md">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->