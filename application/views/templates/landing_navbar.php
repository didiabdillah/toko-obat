<div class="site-wrap">
  <div class="site-navbar py-2">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="<?php echo base_url(); ?>" class="js-logo-clone">Exodus Drugstore</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="<?php if ($url == NULL || $url == "landing" || $url == "Landing") echo "active"; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
              <li class="<?php if ($url == "etalase" || $url == "Etalase") echo "active"; ?>"><a href="<?php echo base_url('etalase/'); ?>">Etalase</a></li>
              <li><?php if ($this->session->userdata("role_id") == 1) { ?>
                  <a href="<?php echo base_url('dashboard/'); ?>"><?php echo $this->session->userdata("nama"); ?></a>
                <?php } else if ($this->session->userdata("role_id") == 2) { ?>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?php echo $this->session->userdata("nama"); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
                    </div>
                  </div>
                <?php } else { ?>
                  <a href="<?php echo base_url('auth/'); ?>">Login</a>
                <?php } ?>
              </li>

              <li>
                <?php
                $cart = $this->db->get_where('cart', ["user_id" => $this->session->userdata('id')])->num_rows();
                ?>
                <div class="icons">
                  <?php if ($this->session->userdata('id')) { ?>
                    <?php if ($cart > 0) { ?>
                      <a href="<?= base_url('purchase/cart/'); ?>" class="icons-btn d-inline-block bag">
                        <span class="icon-shopping-bag"></span>
                        <span class="number"><?php echo $cart; ?></span>
                      </a>
                    <?php } else { ?>
                      <a href="<?= base_url('etalase'); ?>" class="icons-btn d-inline-block bag">
                        <span class="icon-shopping-bag"></span>
                      </a>
                    <?php } ?>
                  <?php } else { ?>
                    <a href="<?= base_url('auth'); ?>" class="icons-btn d-inline-block bag">
                      <span class="icon-shopping-bag"></span>
                    </a>
                  <?php } ?>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>