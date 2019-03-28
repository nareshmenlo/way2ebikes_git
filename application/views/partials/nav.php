<?php
$controller = (strlen($this->uri->segment(1)) > 0) ? $this->uri->segment(1) : "";
?>

<div class="navbar-wrapper">
    <div class="container-fluid">
        
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
            <div class="container">
               <a href="<?php echo site_url(); ?>" class="navbar-brand">Way2ebikes</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <i class="lni-menu"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav mr-auto w-100 justify-content-end">
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo site_url(); ?>">HOME</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo site_url(); ?>about">ABOUT US</a>
                     </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo site_url(); ?>products">PRODUCTS</a>
                     </li> -->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         PRODUCTS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?php echo site_url(); ?>products/4">Strome ZX</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         DEALERS
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="<?php echo site_url(); ?>dealers">OUR DEALERS</a>
                         <a class="dropdown-item" href="<?php echo site_url(); ?>becomeadealer">BECOME A DEALER</a>
                         <a class="dropdown-item" href="<?php echo site_url(); ?>regionaloffice">REGIONAL OFFICE</a>
                         <!-- <div class="dropdown-divider"></div> -->
                         <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                       </div>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo site_url(); ?>ebikeexperience">EXPERIENCE EBIKE</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo site_url(); ?>career">CAREER</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo site_url(); ?>contact">CONTACT US</a>
                     </li>
                     <li class="nav-item">
                        <a class="btn btn-trial" href="#">Free Trial</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
    </div>
</div>
