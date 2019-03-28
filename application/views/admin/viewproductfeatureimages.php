<div class="page-header">
    <h3>Product Feature Images</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('adminproducts'); ?>"> All Products </a>
<form class="form-inline"  method="post" enctype="multipart/form-data" action="<?php echo site_url(); ?>adminproducts/updatefeatureimages/<?php echo $product_details->id; ?>">
  <div class="form-group">
    <label for="email">Upload Feauture Images: </label>
    <input type="file" name="feature_image[]" multiple="" class="form-control" id="feature_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
<?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php }else if($this->session->flashdata('error')){  ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php }else if($this->session->flashdata('warning')){  ?>
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
    </div>
<?php }else if($this->session->flashdata('info')){  ?>
    <div class="alert alert-info">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
    </div>
<?php } ?>
<table id="poststable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>  
        <tr>  
            <th width="10%">Product Image</th>  
            <th width="10%">Actions</th>  
        </tr>  
    </thead>  
    <tbody class="record">  
        <?php 
        if (count($product_feature_images) > 0) {
            foreach ($product_feature_images as $product_feature_image):
                ?>          
                <tr>  
                    <td><img width="200" height="200" src="<?php echo site_url(); ?>useruploadfiles/productimages/<?php echo $product_feature_image->feature_image; ?>" /></td>
                    <td> 
                        <div class="btn-group">  
                            <a class="product_feature_image" feature_id="<?php echo $product_feature_image->feature_id; ?>" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>  
                        </div>  
                    </td>  
                </tr>  
        <?php endforeach; }?>    
    </tbody>  
</table>
<script type="text/javascript" >
    $(document).ready(function(){
        $('body').on('click','.product_feature_image',function(e){
            var feature_id=$(this).attr("feature_id");
            $.ajax({
                url: "<?php echo site_url(); ?>adminproducts/delete_product_feature_image",
                method: 'POST',
                data: { 
                    feature_id: feature_id
                },
                dataType:"json",
                success: function(response){
                    if(response.success){
                        //$('#confirm-delete').modal('hide');
                        location.reload();
                    }                   
                }
            });
        });
    });
</script>