<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?php echo base_url(); ?>">Exodus Drugstore</a> <span class="mx-2 mb-0">/</span> <a href="<?php echo base_url('etalase/'); ?>">Etalase</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?= $detail["nama"] ?></strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mr-auto">
        <div class="border text-center">
          <img src="<?php echo base_url('assets/img/etalase/') . $detail["gambar"]; ?>" alt="Image" class="img-fluid p-5">
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="text-black"><?= $detail["nama"] ?></h2>
        <p><?= $detail["deskripsi"] ?></p>


        <h5>Stock : <?= $detail["stock"]; ?></h5>

        <p>Rp. <?= $detail["harga"]; ?></p>



        <form action="<?= base_url('purchase/add_to_cart/') . $product_id; ?>" method="POST">
          <div class="mb-5">
            <div class="input-group mb-3" style="max-width: 220px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="number" name="qty" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" min="0" max="<?= $detail["stock"]; ?>">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

          </div>
          <p><button class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"> Buy </button></p>
        </form>
        <div class="mt-5">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

              <table class="table custom-table">

                <tbody>
                  <tr>
                    <td>HPIS CODE</td>
                    <td class="bg-light">999_200_40_0</td>
                  </tr>
                  <tr>
                    <td>HEALTHCARE PROVIDERS ONLY</td>
                    <td class="bg-light">No</td>
                  </tr>
                  <tr>
                    <td>LATEX FREE</td>
                    <td class="bg-light">Yes, No</td>
                  </tr>
                  <tr>
                    <td>MEDICATION ROUTE</td>
                    <td class="bg-light">Topical</td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | Exodus Drugstore <i aria-hidden="true"></i>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>
</footer>
</div>