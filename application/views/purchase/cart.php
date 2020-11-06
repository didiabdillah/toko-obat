<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Cart</strong>
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
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $total = 0;
              foreach ($cart as $row) { ?>
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
                  <td><a href="<?= base_url('purchase/delete_cart/') . $row["cart_id"]; ?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                </tr>
              <?php
                $total = $total + $row["total"];
              } ?>

            </tbody>
          </table>
        </div>
      </form>
    </div>
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