<div class="breadcrumbs">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Data Obat</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?php echo base_url('obat/insert/'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col col-md-2"><label for="nama" class=" form-control-label">Nama Obat</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="nama" name="nama" placeholder="Nama Obat..." class="form-control">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="harga" class=" form-control-label">Harga Obat</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="harga" name="harga" placeholder="Harga Obat..." class="form-control">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="banyak" class=" form-control-label">Banyak Stock</label></div>
                    <div class="col-12 col-md-10">
                        <input type="text" id="banyak" name="banyak" placeholder="Banyak Stock Obat..." class="form-control">
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="desc" class=" form-control-label">Deskripsi</label></div>
                    <div class="col-12 col-md-10">
                        <textarea id="desc" name="desc" placeholder="Deskripsi..." class="form-control"></textarea>
                    </div>
                    <!-- <div class="col-12 col-md-10">
                        <span class="help-block">Enter Nama Obat</span>
                    </div> -->
                </div>
                <div class="row form-group">
                    <div class="col col-md-2"><label for="gambar" class=" form-control-label">Gambar</label></div>
                    <div class="col-12 col-md-10">
                        <input type="file" id="gambar" name="gambar" placeholder="Banyak Stock Obat..." class="form-control">
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