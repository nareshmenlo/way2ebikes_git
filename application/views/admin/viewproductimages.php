<div class="page-header">
    <h3>Product Images</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('adminproducts'); ?>"> All Products </a>
<form class="form-inline"  method="post" enctype="multipart/form-data" action="<?php echo site_url(); ?>adminproducts/updateimages/<?php echo $product_details->id; ?>">
  <div class="form-group">
    <label for="email">Upload Images: </label>
    <input type="file" name="product_image[]" multiple="" class="form-control" id="product_image">
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
        if (count($product_images) > 0) {
            foreach ($product_images as $product_image):
                ?>          
                <tr>  
                    <td><img width="200" height="200" src="<?php echo site_url(); ?>useruploadfiles/productimages/<?php echo $product_image->product_image; ?>" /></td>
                    <td> 
                        <div class="btn-group">  
                            <a class="product_image" productimageid="<?php echo $product_image->id; ?>" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>  
                        </div>  
                    </td>  
                </tr>  
        <?php endforeach; }?>    
    </tbody>  
</table>
<script type="text/javascript" >
    $(document).ready(function(){
        $('body').on('click','.product_image',function(e){
            var productimageid=$(this).attr("productimageid");
            $.ajax({
                url: "<?php echo site_url(); ?>adminproducts/delete_product_image",
                method: 'POST',
                data: { 
                    productimageid: productimageid
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