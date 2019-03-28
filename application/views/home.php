<section id="home">
	<div id="carousel-area">
		<div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
		   <ol class="carousel-indicators">
           <?php foreach($banners as $key => $banner){ ?>
		      <li data-target="#carousel-slider" data-slide-to="<?php echo $key; ?>" class="<?php echo $key==0?'active':''; ?>"></li>
		    <!--   <li data-target="#carousel-slider" data-slide-to="1"></li>
		      <li data-target="#carousel-slider" data-slide-to="2"></li>
		      <li data-target="#carousel-slider" data-slide-to="3"></li>
		      <li data-target="#carousel-slider" data-slide-to="4"></li>
		      <li data-target="#carousel-slider" data-slide-to="5"></li> -->
           <?php } ?>
		   </ol>     

       <div class="carousel-inner" role="listbox">
         <?php foreach($banners as $key => $banner){ ?>
		      <div class="carousel-item <?php echo $key==0?'active':''; ?>">
		         <img  width="100%" height="700px" src="<?php echo site_url(); ?>useruploadfiles/bannerimages/<?php echo $banner->banner_bg; ?>" alt="">
		         <div class="overlay"></div>
		         <div class="carousel-caption text-left col-md-4" >
		            <h2 class="wow fadeInRight" data-wow-delay="0.4s"><?php echo $banner->banner_title; ?></h2>
		            <p class="wow fadeInRight" data-wow-delay="0.2s"><?php echo $banner->banner_desc; ?></p>
		         </div>
		         <div class="carousel-caption text-right col-md-10" style="float: right;" >
		            <img class="wow fadeInRight" data-wow-delay="0.2s" src="<?php echo site_url(); ?>useruploadfiles/bannerimages/<?php echo $banner->image; ?>" alt="">
		         </div>
		      </div>
           <?php } ?>
		   </div>
      
       
		   <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
		   <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
		   <span class="sr-only">Previous</span>
		   </a>
		   <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
		   <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
		   <span class="sr-only">Next</span>
		   </a>
		</div>
	</div>
</section>
<section id="services" class="section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Features</p>
       <h2 class="section-title">Explore Amazing Features</h2>
    </div>
    <div class="row">
       <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
             <div class="icon">
                <i class="lni-star"></i>
             </div>
             <h4>Easy to Use</h4>
             <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically.</p>
          </div>
       </div>
       <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.4s">
             <div class="icon">
                <i class="lni-pie-chart"></i>
             </div>
             <h4>Business Analysis</h4>
             <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically.</p>
          </div>
       </div>
       <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
             <div class="icon">
                <i class="lni-shield"></i>
             </div>
             <h4>Robust Security</h4>
             <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically.</p>
          </div>
       </div>
       <!-- <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.8s">
             <div class="icon">
                <i class="lni-cog"></i>
             </div>
             <h4>Tons of Options</h4>
             <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically.</p>
          </div>
       </div>
       <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="1s">
             <div class="icon">
                <i class="lni-cloud-download"></i>
             </div>
             <h4>Free Updates</h4>
             <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically.</p>
          </div>
       </div>
       <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
             <div class="icon">
                <i class="lni-headphone-alt"></i>
             </div>
             <h4>24/7 Support</h4>
             <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically.</p>
          </div>
       </div> -->
    </div>
 </div>
</section>
<!-- <div id="features" class="section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">why</p>
       <h2 class="section-title">Fast & Awesome Interface</h2>
    </div>
    <div class="row justify-content-center">
       <div class="col-lg-8 col-md-12 col-xs-12">
          <div class="feature-thumb wow fadeInDown" data-wow-delay="0.3s">
             <img class="img-fluid" src="<?php echo asset_url(); ?>img/macbook.png" alt="">
          </div>
          <div class="feature-content">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                   <a class="nav-link active" id="free-tab" data-toggle="tab" href="#free" role="tab" aria-controls="free" aria-selected="true"><i class="lni-star"></i> <br> Easy Start</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="massaging-tab" data-toggle="tab" href="#massaging" role="tab" aria-controls="massaging" aria-selected="false"><i class="lni-bubble"></i> <br> Messaging</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="safely-tab" data-toggle="tab" href="#safely" role="tab" aria-controls="safely" aria-selected="false"><i class="lni-shield"></i> <br> Data Safety</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false"><i class="lni-headphone-alt"></i> <br> 24/7 Support</a>
                </li>
             </ul>
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="free" role="tabpanel" aria-labelledby="free-tab">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change.</div>
                <div class="tab-pane fade" id="massaging" role="tabpanel" aria-labelledby="massaging-tab">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change.</div>
                <div class="tab-pane fade" id="safely" role="tabpanel" aria-labelledby="safely-tab">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change.</div>
                <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change.</div>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<section id="counter" class="section">
 <div class="container">
    <div class="row">
       <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="counter-text">
             <div>
                <p class="btn btn-subtitle">Counter</p>
                <h3>Our World Wide Customers</h3>
                <div class="desc-text">
                   <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage. </p>
                   <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. </p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="row">
             <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="counter-box bg-color-1">
                   <div class="fact-count">
                      <h3><span class="counter">23576</span></h3>
                      <p>Users</p>
                   </div>
                   <div class="icon-o"><i class="lni-users"></i></div>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="counter-box bg-color-2">
                   <div class="fact-count">
                      <h3><span class="counter">2124</span></h3>
                      <p>Positive Reviews</p>
                   </div>
                   <div class="icon-o"><i class="lni-emoji-smile"></i></div>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="counter-box bg-color-3">
                   <div class="fact-count">
                      <h3><span class="counter">54598</span></h3>
                      <p>Downloads</p>
                   </div>
                   <div class="icon-o"><i class="lni-download"></i></div>
                </div>
             </div>
             <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="counter-box bg-color-4">
                   <div class="fact-count">
                      <h3><span class="counter">3212</span></h3>
                      <p>Followers</p>
                   </div>
                   <div class="icon-o"><i class="lni-thumbs-up"></i></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<div id="features-two" class="section">
 <div class="container">
    <div class="row">
       <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
             <img class="img-fluid" src="<?php echo asset_url(); ?>img/features/img2.png" alt="">
          </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text-wrapper wow fadeInRight" data-wow-delay="0.6s">
             <div>
                <p class="btn btn-subtitle">How It Works?</p>
                <h3>Refreshing Design</h3>
                <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage.</p>
                <a class="btn btn-rm" href="#">Read More <i class="lni-arrow-right"></i></a>
             </div>
          </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="text-wrapper wow fadeInRight" data-wow-delay="0.9s">
             <div>
                <p class="btn btn-subtitle">Dashboard</p>
                <h3>Track Your Business</h3>
                <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive e-tailers after sustainable total linkage.</p>
                <a class="btn btn-rm" href="#">Read More <i class="lni-arrow-right"></i></a>
             </div>
          </div>
       </div>
       <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="1.2s">
             <img class="img-fluid" src="<?php echo asset_url(); ?>img/features/img1.png" alt="">
          </div>
       </div>
    </div>
 </div>
</div>
<section id="screenshots" class="screens-shot section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Screenshots</p>
       <h2 class="section-title">Our Awesome Screens</h2>
    </div>
    <div class="row justify-content-center">
       <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="screens-slider owl-carousel">
             <div class="item">
                <div class="screenshot-thumb">
                   <img src="<?php echo asset_url(); ?>img/screens/img-1.jpg" alt="" />
                </div>
             </div>
             <div class="item">
                <div class="screenshot-thumb">
                   <img src="<?php echo asset_url(); ?>img/screens/img-2.jpg" alt="" />
                </div>
             </div>
             <div class="item">
                <div class="screenshot-thumb">
                   <img src="<?php echo asset_url(); ?>img/screens/img-3.jpg" alt="" />
                </div>
             </div>
             <div class="item">
                <div class="screenshot-thumb">
                   <img src="<?php echo asset_url(); ?>img/screens/img-1.jpg" alt="" />
                </div>
             </div>
             <div class="item">
                <div class="screenshot-thumb">
                   <img src="<?php echo asset_url(); ?>img/screens/img-2.jpg" alt="" />
                </div>
             </div>
             <div class="item">
                <div class="screenshot-thumb">
                   <img src="<?php echo asset_url(); ?>img/screens/img-3.jpg" alt="" />
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<section id="team" class="section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Team</p>
       <h2 class="section-title">Our Expert Team</h2>
    </div>
    <div class="row">
       <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="single-team">
             <div class="team-thumb">
                <img src="<?php echo asset_url(); ?>img/team/team1.jpg" alt="">
                <ul class="social-list">
                   <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                   <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                   <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                   <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
             </div>
             <div class="team-details">
                <div class="team-inner">
                   <h4 class="team-title">Mark Parker</h4>
                   <p>Software Engineer</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="single-team">
             <div class="team-thumb">
                <img src="<?php echo asset_url(); ?>img/team/team2.jpg" alt="">
                <ul class="social-list">
                   <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                   <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                   <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                   <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
             </div>
             <div class="team-details">
                <div class="team-inner">
                   <h4 class="team-title">Jhon Deo</h4>
                   <p>Front-end Developer</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="single-team">
             <div class="team-thumb">
                <img src="<?php echo asset_url(); ?>img/team/team3.jpg" alt="">
                <ul class="social-list">
                   <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                   <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                   <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                   <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
             </div>
             <div class="team-details">
                <div class="team-inner">
                   <h4 class="team-title">Jhon Smith</h4>
                   <p>UI/UX Designer</p>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-6 col-xs-12">
          <div class="single-team">
             <div class="team-thumb">
                <img src="<?php echo asset_url(); ?>img/team/team4.jpg" alt="">
                <ul class="social-list">
                   <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                   <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                   <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                   <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                </ul>
             </div>
             <div class="team-details">
                <div class="team-inner">
                   <h4 class="team-title">Elina Dcruz</h4>
                   <p>Digital Marketer</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<section id="testimonial" class="section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Reviews</p>
       <h2 class="section-title">Clients Who Loved Us</h2>
    </div>
    <div class="row justify-content-center">
       <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div id="testimonials" class="touch-slider owl-carousel">
             <div class="item">
                <div class="testimonial-item">
                   <div class="author">
                      <div class="img-thumb">
                         <img src="<?php echo asset_url(); ?>img/testimonial/img1.png" alt="">
                      </div>
                   </div>
                   <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                      <div class="author-info">
                         <h2><a href="#">Mark Parker</a></h2>
                         <span>UIdeck</span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="item">
                <div class="testimonial-item">
                   <div class="author">
                      <div class="img-thumb">
                         <img src="<?php echo asset_url(); ?>img/testimonial/img2.png" alt="">
                      </div>
                   </div>
                   <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                      <div class="author-info">
                         <h2><a href="#">Mark Parker</a></h2>
                         <span>Tesla Motors</span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="item">
                <div class="testimonial-item">
                   <div class="author">
                      <div class="img-thumb">
                         <img src="<?php echo asset_url(); ?>img/testimonial/img3.png" alt="">
                      </div>
                   </div>
                   <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                      <div class="author-info">
                         <h2><a href="#">Mark Parker</a></h2>
                         <span>Envato Customer</span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="item">
                <div class="testimonial-item">
                   <div class="author">
                      <div class="img-thumb">
                         <img src="<?php echo asset_url(); ?>img/testimonial/img2.png" alt="">
                      </div>
                   </div>
                   <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                      <div class="author-info">
                         <h2><a href="#">Mark Parker</a></h2>
                         <span>GrayGris Inc.</span>
                      </div>
                   </div>
                </div>
             </div>
             <div class="item">
                <div class="testimonial-item">
                   <div class="author">
                      <div class="img-thumb">
                         <img src="<?php echo asset_url(); ?>img/testimonial/img1.png" alt="">
                      </div>
                   </div>
                   <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive. Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthu.</p>
                      <div class="author-info">
                         <h2><a href="#">- Alex Dattilo</a></h2>
                         <span>CEO Optima Inc</span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<div id="clients" class="section">
 <div class="container">
    <div class="row" id="clients-scroller">
       <div class="client-item-wrapper">
          <img src="<?php echo asset_url(); ?>img/clients/img1.png" alt="">
       </div>
       <div class="client-item-wrapper">
          <img src="<?php echo asset_url(); ?>img/clients/img2.png" alt="">
       </div>
       <div class="client-item-wrapper">
          <img src="<?php echo asset_url(); ?>img/clients/img3.png" alt="">
       </div>
       <div class="client-item-wrapper">
          <img src="<?php echo asset_url(); ?>img/clients/img4.png" alt="">
       </div>
       <div class="client-item-wrapper">
          <img src="<?php echo asset_url(); ?>img/clients/img5.png" alt="">
       </div>
    </div>
 </div>
</div>
<div id="subscribe" class="section">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-7 col-md-12 col-xs-12">
          <div class="subscribe-form">
             <div class="form-wrapper">
                <div class="sub-title text-center">
                   <h3>Subscribe For More Features</h3>
                   <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p>
                </div>
                <form>
                   <div class="row">
                      <div class="col-12 form-line">
                         <div class="form-group form-search">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            <button type="submit" class="btn btn-common btn-search">Subscribe</button>
                         </div>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<div id="pricing" class="section pricing-section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Pricing</p>
       <h2 class="section-title">Our Pricing Plan</h2>
    </div>
    <div class="row pricing-tables">
       <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table">
             <div class="pricing-details">
                <div class="icon">
                   <i class="lni-rocket"></i>
                </div>
                <h2>Free</h2>
                <ul>
                   <li>Free Installation</li>
                   <li>2 GB Storage</li>
                   <li>Single User</li>
                   <li>Sales Dashboard</li>
                   <li>Minimal Features</li>
                   <li>1000 Logs</li>
                </ul>
                <div class="price">$0<span>/mo</span></div>
             </div>
             <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
             </div>
          </div>
       </div>
       <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table pricing-active">
             <div class="pricing-details">
                <div class="icon">
                   <i class="lni-drop"></i>
                </div>
                <h2>Standard</h2>
                <ul>
                   <li>Free Installation</li>
                   <li>10 GB Hosting</li>
                   <li>5 Users</li>
                   <li>Sales Dashboard</li>
                   <li>Premium Features</li>
                   <li>50,000 Logs</li>
                </ul>
                <div class="price">$99 <span>/mo</span></div>
             </div>
             <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
             </div>
          </div>
       </div>
       <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="pricing-table">
             <div class="pricing-details">
                <div class="icon">
                   <i class="lni-briefcase"></i>
                </div>
                <h2>Business</h2>
                <ul>
                   <li>Free Installation</li>
                   <li>50 GB Hosting</li>
                   <li>Unlimited Users</li>
                   <li>Sales and Marketing Dashbaord</li>
                   <li>Premium Features</li>
                   <li>Unlimited Logs</li>
                </ul>
                <div class="price">$199 <span>/mo</span></div>
             </div>
             <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<section id="download">
 <div class="container">
    <div class="row">
       <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="download-thumb wow fadeInLeft" data-wow-delay="0.2s">
             <img class="img-fluid" src="<?php echo asset_url(); ?>img/mac.png" alt="">
          </div>
       </div>
       <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="download-wrapper wow fadeInRight" data-wow-delay="0.3s">
             <div>
                <div class="download-text">
                   <h4>Download Our App From Store</h4>
                   <p>Appropriately implement one-to-one catalysts for change vis-a-vis wireless catalysts for change. Enthusiastically architect adaptive.</p>
                </div>
                <div class="header-button">
                   <a href="#" class="btn btn-border"><i class="lni-apple"></i> AppStore</a>
                   <a href="#" class="btn btn-common btn-effect"><i class="lni-android"></i> PlayStore</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<section id="blog" class="section">
 <div class="container">
    <div class="section-header">
       <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Blog</p>
       <h2 class="section-title">Recent News</h2>
    </div>
    <div class="row">
       <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
             <div class="blog-item-img">
                <a href="single-post.html">
                <img src="<?php echo asset_url(); ?>img/blog/img1.jpg" alt="">
                </a>
                <div class="author-img">
                   <img src="<?php echo asset_url(); ?>img/blog/author.png" alt="">
                </div>
             </div>
             <div class="blog-item-text">
                <h3><a href="single-post.html">How Proton Will Transform Your Business</a></h3>
                <div class="author">
                   <span class="name"><a href="#">Posted by Admin</a></span>
                   <span class="date float-right">10 April, 2020</span>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
             <div class="blog-item-img">
                <a href="single-post.html">
                <img src="<?php echo asset_url(); ?>img/blog/img2.jpg" alt="">
                </a>
                <div class="author-img">
                   <img src="<?php echo asset_url(); ?>img/blog/author.png" alt="">
                </div>
             </div>
             <div class="blog-item-text">
                <h3><a href="single-post.html">20 Growth Hacking Tips from Experts</a></h3>
                <div class="author">
                   <span class="name"><a href="#">Posted by Admin</a></span>
                   <span class="date float-right">10 April, 2020</span>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
             <div class="blog-item-img">
                <a href="single-post.html">
                <img src="<?php echo asset_url(); ?>img/blog/img3.jpg" alt="">
                </a>
                <div class="author-img">
                   <img src="<?php echo asset_url(); ?>img/blog/author.png" alt="">
                </div>
             </div>
             <div class="blog-item-text">
                <h3><a href="single-post.html">Proton Has Been Launched, Get Started!</a></h3>
                <div class="author">
                   <span class="name"><a href="#">Posted by Admin</a></span>
                   <span class="date float-right">10 April, 2020</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section> -->