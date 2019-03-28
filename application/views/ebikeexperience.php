<section id="blog" class="section">
  <?php //print_r($videos);
  ?>
 <div class="container">
    <div class="section-header">
       <!-- <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Blog</p> -->
       <h2 class="section-title wow fadeInDown" data-wow-delay="0.2s">EXPERIENCE EBIKE</h2>
    </div>
    <div class="row">
      <?php foreach($videos as $single_video){ ?>
        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
          <div class="blog-item-wrapper">
             <div class="blog-item-img">
                <iframe src="http://www.youtube.com/embed/<?php echo $single_video->vedio; ?>" frameborder="0" width="100%" height="250px" allowfullscreen></iframe>               
             </div>
          </div>
       </div>
      <?php } ?>
    </div>
 </div>
</section>