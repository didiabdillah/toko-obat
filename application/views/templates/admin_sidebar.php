 <!-- Left Panel -->

 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">

         <div class="navbar-header">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                 <i class="fa fa-bars"></i>
             </button>
             <a class="navbar-brand" href="<?= base_url(); ?>">Exodus Drugstore</a>
             <a class="navbar-brand hidden" href="<?= base_url(); ?>">Exo</a>
         </div>

         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="<?php if ($url == "Dashboard" || $url == "dashbaord") echo "active"; ?>">
                     <a href="<?php echo base_url('Dashboard/'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                 </li>

                 </li>
                 <li class="<?php if ($url == "Obat" || $url == "obat") echo "active"; ?>">
                     <a href="<?php echo base_url('Obat/'); ?>"> <i class="menu-icon fa fa-table"></i>Data</a>
                 </li>

             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside><!-- /#left-panel -->

 <!-- Left Panel -->