<div class="page-header">
    <h3>Banners Management</h3>
</div>
<a class="btn btn-primary btn-sm pull-right" href="<?php echo base_url('banners'); ?>"> All Banners </a>
<br><br>  
<fieldset class="scheduler-border">
    <legend class="scheduler-border">View Banner</legend>
<dl class="dl-horizontal">
  <?php if($bannerdata->image!=""){ ?>
  <dd><img onerror="imgError(this);"  src="<?php echo base_url(); ?>useruploadfiles/bannerimages/<?php  echo $bannerdata->image; ?>"></dd>
  <?php  } ?>  
</dl>
    
</fieldset>
