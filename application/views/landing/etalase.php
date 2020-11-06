<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?php echo base_url(); ?>">Exodus Drugstore</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Etalase</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
   <div class="row">
      <?php foreach ($etalase as $row) { ?>
        <?php if ($row["stock"] > 0) { ?>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <!-- <span class="tag">Sale</span> -->
            <a href="<?php echo base_url('etalase/detail/') . $row["id"]; ?>"> <img src="<?php echo base_url('assets/img/etalase/') . $row["gambar"]; ?>" alt="Image" style="width: 320px; height: 330px"></a>
            <h3 class="text-dark"><a href="<?php echo base_url('etalase/detail/') . $row["id"]; ?>"><?= $row["nama"]; ?></a></h3>
            <p class="price">Rp. <?= $row["harga"]; ?></p>
          </div>
        <?php } ?>
      <?php } ?>

    </div>
  </div>
</div>
<div class="row pt-5 mt-5 text-center">
  <div class="col-md-12">
    <p>
      Copyright &copy;
      <script>
        document.write(new Date().getFullYear());
      </script> All rights reserved | Exodus Drugstore <i aria-hidden="true"></i>
    </p>
  </div>

</div>