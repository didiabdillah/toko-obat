<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Checkout</strong>
      </div>
    </div>
  </div>
</div>

<div class="row mb-5">
  <div class="col-md-12">
    <center>
      <h2 class="h3 mb-3 text-black">Your Order</h2>
    </center>
    <div class="p-3 p-lg-5 border">
      <table class="table site-block-order-table mb-5">
        <thead>
          <th>Product</th>
          <th>Total</th>
        </thead>
        <tbody>
          <?php
          $total = 0;
          foreach ($cart as $row) { ?>
            <tr>
              <td><?= $row["nama_obat"]; ?><strong class="mx-2">x</strong> <?= $row["qty"]; ?></td>
              <td>Rp. <?= $row["total"]; ?></td>
            </tr>
          <?php
            $total = $total + $row["total"];
          } ?>
          <tr>
            <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
            <td class="text-black font-weight-bold"><strong>Rp. <?= $total; ?></strong></td>
          </tr>
        </tbody>
      </table>

      <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block" onclick="window.location='<?= base_url('purchase/procced/'); ?>'">Place
          Order</button>
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