<div class="site-wrap">


  <div class="site-navbar py-2">

    <!-- <div class="search-wrap">
<div class="container">
  <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
  <form action="#" method="post">
    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
  </form>
</div>
</div> -->

    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="index.html" class="js-logo-clone">Exodus Drugstore</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              <li class="<?php if ($url == NULL || $url == "landing" || $url == "Landing") echo "active"; ?>"><a href="<?php echo base_url(); ?>">Beranda</a></li>
              <li class="<?php if ($url == "etalase" || $url == "Etalase") echo "active"; ?>"><a href="<?php echo base_url('etalase/'); ?>">Etalase</a></li>
              <!-- <li class="has-children">
          <a href="#">Dropdown</a>
          <ul class="dropdown">
            <li><a href="#">Supplements</a></li>
            <li class="has-children">
              <a href="#">Vitamins</a>
              <ul class="dropdown">
                <li><a href="#">Supplements</a></li>
                <li><a href="#">Vitamins</a></li>
                <li><a href="#">Diet &amp; Nutrition</a></li>
                <li><a href="#">Tea &amp; Coffee</a></li>
              </ul>
            </li>
            <li><a href="#">Diet &amp; Nutrition</a></li>
            <li><a href="#">Tea &amp; Coffee</a></li> -->

              <!-- </ul> -->
              <!--  </li> -->
              <li class="<?php if ($url == "tentang" || $url == "Tentang") echo "active"; ?>"><a href="<?php echo base_url('tentang/'); ?>">Tentang</a></li>
              <li><a href="<?php echo base_url('auth/'); ?>">Login</a></li>
              <!--  <li><a href="contact.html">Contact</a></li> -->
            </ul>
          </nav>
        </div>
        <!-- <div class="icons">
    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
    <a href="cart.html" class="icons-btn d-inline-block bag">
      <span class="icon-shopping-bag"></span>
      <span class="number">2</span>
    </a>
    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
        class="icon-menu"></span></a>
  </div> -->
      </div>
    </div>
  </div>