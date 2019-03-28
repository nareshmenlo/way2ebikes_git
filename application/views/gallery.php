
<div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url(); ?>"><?php echo is_eng_language()?"HOME":"హోమ్"; ?></a></li>
                        <li class="active"><?php echo is_eng_language()?"PHOTOS":"ఫోటోలు"; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <!-- Block -->
        <div class="block bottom-sm">
            <div class="container">
                <h2 class="h-lg text-center"><span class="color"><?php echo is_eng_language()?"PHOTOS":"ఫోటోలు"; ?></span></h2>                
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="testimonials-grid">
                    <div class="row">
                    <?php 
	if(isset($gallery) && count($gallery)>0){
	foreach($gallery as  $single):	?>
		<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="fadeInUp" data-animation-delay="0s">
	        <div class="inside">
	            <a href="<?php echo base_url();?>gallery/photos/<?php echo $single->id; ?>">
	            	<img width="100%" src="<?php echo base_url();?>/useruploadfiles/galleryimages/<?php echo $single->image; ?>" />
	            </a>	            
	            <h5 class="title"><?php echo $single->title;  ?></h5>
	        </div>
	    </div> 
	<?php	endforeach; } ?>
             
                </div>
                <div id="moreLoader" class="more-loader"><img src="images/ajax-loader.gif" alt=""></div>
                <!-- <div class="text-center"><a class="btn view-more-testimonials" href="contact.html">Lod</a></div> -->
            </div>
        </div>
        <!-- //Testimonials Grid -->
    </div>