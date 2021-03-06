
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>
<div id="page-content">
        <!-- Breadcrumbs Block -->
        <div class="block">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">PHOTOS</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //Breadcrumbs Block -->
        <!-- Block -->
        <div class="block">
            <div class="container">
                <div class="testimonials-grid">
                    <div class="row">
                    <?php 
	if(isset($gallery) && count($gallery)>0){
	foreach($gallery as  $single):	?>
		<div class="testimonials-item col-sm-6 col-md-4 animation" data-animation="fadeInUp" data-animation-delay="0s">
	        <div class="inside">
	            	<img class="fancybox" data-big="<?php echo base_url();?>/useruploadfiles/galleryimages/<?php echo $single->image; ?>" width="100%" height="
	            	300px" src="<?php echo base_url();?>/useruploadfiles/galleryimages/<?php echo $single->image; ?>" />
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

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>