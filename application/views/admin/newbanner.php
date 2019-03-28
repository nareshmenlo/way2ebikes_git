<div class="page-header">
    <h3>Banners Management</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('banners'); ?>"> All Bannners </a>
<br><br>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Add New Banner</legend>
    <?php if(validation_errors()!=""){?>
    	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo validation_errors(); ?>
    </div>
    <?php } ?>
  <form role="form" id="postform" action=""  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="bannerimage">Banner Title</label>
        <input type="text" class="form-control col-md-8" id="banner_title"  name="banner_title"/>
      </div>
      <br/><br/>
      <div class="form-group">
        <label for="bannerimage">Banner Description</label>
        <input type="text" class="form-control col-md-8" id="banner_desc"  name="banner_desc"/>
      </div>
      <br/><br/>
      <div class="form-group">
        <label for="bannerimage">Banner Backgroup Image</label>
        <input type="file" class="form-control col-md-8" id="bannerbgimage"  name="bannerbgimage"/>
      </div>
      <br/><br/>
      <div class="form-group">
        <label for="bannerimage">Banner Image</label>
        <input type="file" class="form-control col-md-8" id="bannerimage"  name="bannerimage"/>
      </div>  
      <br/><br/>
      <input type="submit" name="savepost" class="btn btn-primary" />
  </form>
</fieldset>
