<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="index.html">Beranda</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Keranjang</strong>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <form class="col-md-12" method="post">
        <div class="site-blocks-table">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="product-thumbnail">Gambar</th>
                <th class="product-name">Produk</th>
                <th class="product-price">Harga</th>
                <th class="product-quantity">Jumlah</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Hapus</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($cart as $row) { ?>
                <tr>
                  <td class="product-thumbnail">
                    <img src="<?= base_url('assets/img/etalase/') . $row["gambar"]; ?>" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black"><?= $row["nama_obat"]; ?></h2>
                  </td>
                  <td>Rp. <?= $row["harga"]; ?></td>
                  <td>
                    <?= $row["qty"]; ?>
                  </td>
                  <td>Rp. <?= $row["total"]; ?></td>
                  <td><a href="<?= base_url('purchase/delete_cart/') . $row["user_id"] . "/" . $row["id_obat"]; ?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </form>
    </div>

    <!-- <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-md btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block">Lanjut Belanja</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Voucher</label>
                <p>Masukan kode voucher Anda.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Kode Voucher">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Pakai Voucher</button>
              </div>
            </div>
          </div> -->
    <div class="col-md-6 pl-5">
      <div class="row justify-content-end">
        <div class="col-md-7">
          <div class="row">
            <div class="col-md-12 text-right border-bottom mb-5">
              <h3 class="text-black h4 text-uppercase">Total</h3>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-6">
              <span class="text-black">Total</span>
            </div>
            <div class="col-md-6 text-right">
              <strong class="text-black">
                <?php
                $total = 0;
                foreach ($cart as $t) {
                  $total = $total + $t["total"];
                }
                echo $total;
                ?>
              </strong>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <button class="btn btn-primary btn-lg btn-block" onclick="window.location='<?= base_url('purchase/checkout'); ?>'">Checkout</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        

        </div>
      </div>
    </footer>
  </div> -->

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