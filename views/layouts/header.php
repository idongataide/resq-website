<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title> <?php echo @$data['page_title'] ?: 'MTC - Index'; ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="e">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/logo/logo.svg">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assets/img/logo/logo.svg">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/assets/img/logo/logo.svg">
        
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/vendors.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icon.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.min.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/cryptocurrency.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.min.css">
        
    </head>
    <body>
    <header> 
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
            <div class="container">
                <!-- <div class="bg-nav">   -->
                    <div class="col-12 col-lg-8 w-100- justify m-auto bg-nav">
                        <div class="col-auto col-lg-3 me-lg-0 me-auto">
                            <a class="navbar-brand" href="home">
                                <img src="<?php echo base_url(); ?>/assets/img/logo/logo.svg"  alt="" class="default-logo">
                                <img src="<?php echo base_url(); ?>/assets/img/logo/logo.svg"  alt="" class="alt-logo">
                                <img src="<?php echo base_url(); ?>/assets/img/logo/logo.svg"  alt="" class="mobile-logo"> 
                            </a>
                        </div>
                        <div class="col-auto col-lg-6  justify menu-order position-static">
                            <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                            </button>
                            <div class="collapse navbar-collapse justify" id="navbarNav"> 
                                <ul class="navbar-nav alt-font"> 
                                    <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
                                    <li class="nav-item"><a href="faqs" class="nav-link">FAQs</a></li>                           
                                    <li class="nav-item dropdown dropdown-with-icon-style02">
                                    <a href="demo-accounting-services.html" class="nav-link">Resources</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                        <li><a href="privacy">Privacy Policy</a></li>
                                        <li><a href="terms">Terms and Condition</a></li>
                                 </ul>
                                </li>                          
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto col-lg-3 text-end xs-pe-0"> 
                            <div class="header-icon">  
                                <div class="header-button">
                                    <a href="#" target="_blank" data-bs-toggle="modal" data-bs-target="#modal-signin" class="btn btn-small btn-primary btn-rounded btn-box-shadow btn-switch-text">
                                        <span>
                                            <span class="btn-double-text" data-text="Contact us">Contact us</span>
                                        </span> 
                                    </a> 
                                </div>
                            </div>
                        </div>
                  </div>
                <!-- </div> -->
            </div>
        </nav>
        <!-- end navigation -->
    </header>
