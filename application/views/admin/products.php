<div class="page-header">
    <h3>All products</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('adminproducts/create'); ?>"> Add New product </a>
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
            <th width="5%">S.no</th>  
            <th width="10%">Product Title</th>
            <th width="10%">Product Slug</th>  
            <th width="10%">Created At</th>  
            <th width="10%">Status</th>  
            <th width="10%">Actions</th>  
        </tr>  
    </thead>  
    <tbody class="record">  
        <?php $no=0;
        if (count($products) > 0) {
            foreach ($products as $product):
                $no++;
                ?>          
                <tr>  
                    <td><?php echo $no; ?></td>  
                    <td><?php echo $product->product_title; ?></td>
                    <td><?php echo $product->product_slug; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($product->created_at)); ?></td> 
                    <?php $ischecked = $product->status=="Active" ? "checked='checked'" : ""; ?>
                    <td><input type="checkbox" data-size="mini" productid="<?php echo $product->id; ?>" value="<?php echo $product->status; ?>" name="isactive" <?php echo $ischecked; ?>></td>   
                    <td> 
                        <div class="btn-group">  
                            <a href="<?php echo base_url('adminproducts/viewproduct/'.$product->id); ?>" ><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url('adminproducts/productimages/'.$product->id); ?>" ><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url('adminproducts/productfeatureimages/'.$product->id); ?>" ><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url('adminproducts/edit/'.$product->id); ?>" ><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>  
                            <a productid="<?php echo $product->id; ?>"  data-toggle="modal" data-target="#confirm-delete" ><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>  
                        </div>  
                    </td>  
                </tr>  
        <?php endforeach; }?>    
    </tbody>  
</table>  
 <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
        </div>

        <div class="modal-body">
          <p>You are about to delete one post</p>
          <p>Do you want to proceed?</p>
          <input type="hidden" name="productid" id="deleteproductid">
          <p class="debug-url"></p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger btn-ok">Delete</a>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript" >
    $(document).ready(function(){
      $("[name='isactive']").bootstrapSwitch();

       $('#poststable').DataTable();
        $('input[name="isactive"]').on('switchChange.bootstrapSwitch', function(event, state) {
            $.ajax({
                url: current_url+"/make_active_not",
                method: 'POST',
                data: { 
                    productid: $(this).attr('productid'),
                    status:$(this).val()
                },
                dataType:"json",
                success: function(response){
                    if(response.success){
                        var status=$('input[productid="'+response.productid+'"]').val();
                        $('input[productid="'+response.productid+'"]').val((status=="Active")?"Deactive":"Active");
                    }                   
                }
            });
        });

        $('#confirm-delete').on('show.bs.modal', function(e) {
            $('#deleteproductid').val($(e.relatedTarget).attr('productid'));
        });

        $('body').on('click','a.btn-ok',function(e){
            var productid=$('#deleteproductid').val();
            $.ajax({
                url: current_url+"/delete_product",
                method: 'POST',
                data: { 
                    productid: productid
                },
                dataType:"json",
                success: function(response){
                    if(response.success){
                        $('#confirm-delete').modal('hide');
                        location.reload();
                    }                   
                }
            });
        });
    });
</script>