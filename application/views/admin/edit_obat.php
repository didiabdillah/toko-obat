<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Edit Data Obat</strong>
        </div>
        <div class="card-body card-block">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?= $obat["id"]; ?>">
                <div class="row form-group">
                    <div class="col col-md-2"><label for="nama" class=" form-control-label">Nama Obat</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="nama" name="nama" placeholder="Nama Obat..." class="form-control" value="<?= $obat["nama"]; ?>">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="harga" class=" form-control-label">Harga Obat</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="harga" name="harga" placeholder="Harga Obat..." class="form-control" value="<?= $obat["harga"]; ?>">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="banyak" class=" form-control-label">Banyak Stock</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="banyak" name="banyak" placeholder="Banyak Stock Obat..." class="form-control" value="<?= $obat["stock"]; ?>">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="desc" class=" form-control-label">Deskripsi</label></div>
                    <div class="col-12 col-md-10">
                        <textarea id="desc" name="desc" placeholder="Deskripsi..." class="form-control"><?= $obat["deskripsi"]; ?></textarea>
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="gambar" class=" form-control-label">Gambar</label></div>
                    <div class="col-12 col-md-10">
                        <input type="file" id="gambar" name="gambar" placeholder="Banyak Stock Obat..." class="form-control" value="">
                        <img src="<?php echo base_url('assets/img/etalase/') . $obat["gambar"]; ?>" alt="" style="width: 150px; height: 100px;">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-md">
                        <i class="fa fa-dot-circle-o"></i> Simpan
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