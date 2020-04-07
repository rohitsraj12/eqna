<?php

$project_name = "eqna";
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo $page;?> | <?php echo $project_name;?></title>

      <!-- style sheet -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <link rel="stylesheet" href="<?=base_url()?>css/style.css">
      <link rel="stylesheet" href="<?=base_url()?>css/media-lg.css">
      <link rel="stylesheet" href="<?=base_url()?>css/media-md.css">
      <link rel="stylesheet" href="<?=base_url()?>css/media-sm.css">
      <!-- script -->
</head>

<body>
      <div class="body__wrap">
            <div class="body__header">
                  
                  <div class="header__toggle" id="header__toggle">
                        <span id="hamberger" class="hamburger"></span>
                  </div>
                  
                  <header class="wrap__section off-scroll__header">
                        <div class="header__brand">
                              <a href="<?=base_url()?>index.php">logo</a>
                        </div>
                        <!-- end header brand -->

                        <div class="header__link">
                              <!-- <div class="header__social">
                                    <ul>
                                          <li class="social__list"><a href="#" target="_blank" class="social__link"><i title="twitter" class="fab fa-twitter"></i>1</a></li>
                                          <li class="social__list"><a href="#" target="_blank" class="social__link"><i title="facebook" class="fab fa-facebook-f"></i>2</a></li>
                                          <li class="social__list"><a href="#" target="_blank" class="social__link"><i title="instagram" class="fab fa-instagram"></i>3</a></li>
                                    </ul>
                              </div> -->
                              <!-- end header social -->
                        
                              <nav class="header__nav">
                                    <ul class="header__nav-main">
                                          <li class="active nav__list"><a href="<?=base_url()?>index.php" class="nav__link">home</a></li>
                                          <li class="nav__list"><a href="<?=base_url()?>about_us.php" class="nav__link">about</a></li>
                                          <li class="nav__list"><a href="<?=base_url()?>service.php" class="nav__link">services</a></li>
                                          <li class="nav__list"><a href="<?=base_url()?>certification.php" class="nav__link">certification</a></li>
                                          <li class="nav__list"><a href="<?=base_url()?>contact.php" class="nav__link">contact us</a></li>
                                    </ul>
                              </nav>
                              <!-- end header nav -->
                        </div>
                        <!-- end header link -->
                  </header>
            </div>
            <!-- end body header -->