<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WolCut</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>media/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>media/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="<?php echo base_url();?>media/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>media/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>media/css/style.red.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>media/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>media/vendor/animate/animate.css">
  </head>
  <body>
    <div id="all">
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar fixed-top navbar-expand-lg">
          <div class="container"><a href="<?php echo base_url("index.php"); ?>" class="navbar-brand home"><img src="<?php echo base_url();?>media/img/logo_new.png" style="height: 60px;" alt="company logo" class="d-md-inline-block"><span class="sr-only">Wolcut - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-main"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?php echo base_url("index.php"); ?>">Home</a>
                  
                </li>
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
                <li class="nav-item dropdown menu-large"><a href="product.html" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">Products <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-md-6 col-lg-3">
                          <h5>Polishing Abrasives</h5>
                          <ul class="list-unstyled mb-3">
                            <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="POLISHING ABRASIVES"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?>
                            <li class="nav-item"><a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" class="nav-link"><?php echo $row->p_name;?></a></li><?php }}?>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Coated Abrasives</h5>
                          <ul class="list-unstyled mb-3">
                            <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="COATED ABRASIVES"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?>
                            <li class="nav-item"><a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" class="nav-link"><?php echo $row->p_name;?></a></li><?php }}?>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>Bonded Abrasives</h5>
                          <ul class="list-unstyled mb-3">
                            <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="BONDED ABRASIVES"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?>
                            <li class="nav-item"><a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" class="nav-link"><?php echo $row->p_name;?></a></li><?php }}?>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                          <h5>More</h5>
                          <ul class="list-unstyled mb-3">
                            <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="MORE"){
      $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?>
                            <li class="nav-item"><a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" class="nav-link"><?php echo $row->p_name;?></a></li><?php }}?>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

                <li class="nav-item"><a href="<?php echo base_url("index.php/shop/about"); ?>">About</a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url("index.php/shop/allcategory"); ?>">Where to Buy</a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url("index.php/shop/contact"); ?>">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End--> 