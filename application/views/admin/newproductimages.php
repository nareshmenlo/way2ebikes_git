<div class="page-header">
    <h3>Products Management</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('adminproducts'); ?>"> All Product Images</a>
<br><br>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Add New Product Images</legend>
    <?php if(validation_errors()!=""){?>
    	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo validation_errors(); ?>
    </div>
    <?php } ?>
  <form role="form" id="postform" action=""  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="productimage">Product Id</label>
        <select class="form-control" id="product_id" name="product_id">
          <?php foreach ($products as $product) { ?>
            <option value="<?php echo $product->id; ?>"><?php echo $product->product_title; ?></option>
          <?php } ?>          
        </select>
        <input type="text" class="form-control col-md-8" id="product_title"  name="product_title"/>
      </div>
      <br/><br/>
      <div class="form-group">
        <label for="productslug">Product Slug</label>
        <input type="text" class="form-control col-md-8" id="product_slug"  name="product_slug"/>
      </div>
      <br/><br/>
      <div class="form-group">
        <label for="productimage">Product Description</label>
        <textarea class="form-control col-md-8" id="product_desc"  name="product_desc"></textarea>
      </div>
        <br/><br/>
        <br/><br/>
      <input type="submit" name="savepost" class="btn btn-primary" />
      <a name="cancel_product" href="<?php echo site_url().'adminproducts';?>" class="btn btn-danger" >Cancel</a>
  </form>
</fieldset>
