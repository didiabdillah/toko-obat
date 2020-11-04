<div class="breadcrumbs">
    <div class="container" style="margin-top: 20px;">

        <a href="<?php echo base_url('obat/insert/'); ?>"><button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> TAMBAH</button></a>
        <hr>

    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">DATA OBAT</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>NAMA OBAT</th>
                                        <th>HARGA</th>
                                        <th>JUMLAH STOCK</th>
                                        <th>GAMBAR</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paramex</td>
                                        <td>2000</td>
                                        <td>2</td>
                                        <td><img src="https://dummyimage.com/600x400/000/fff.jpg&text=test" alt="" style="width: 75px; height: 50px;"></td>
                                        <td>
                                            <a href="<?php echo base_url('obat/edit/'); ?>" class="btn btn-warning m-l-10 m-b-10">Edit</a>

                                            <a href="<?php echo base_url('obat/destroy/'); ?>" class="btn btn-danger m-l-10 m-b-10">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->