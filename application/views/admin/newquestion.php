<div class="page-header">
    <h3>Questions and Answers Management</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('questions'); ?>">All Q&A's</a>
<br><br>
<fieldset class="scheduler-border">
  <legend class="scheduler-border">Add New Q&A</legend>
  <?php if(validation_errors()!=""){?>
  	<div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <strong>Error!</strong> <?php echo validation_errors(); ?>
  </div>
  <?php } ?>
  <form role="form" id="postform" action=""  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="question">Question</label>
      <input type="text" class="form-control col-md-8" id="question"  name="question"/>
    </div>
    <br/><br/>
    <div class="form-group">
      <label for="bannerimage">Answer</label>
      <textarea class="form-control col-md-8" id="answer"  name="answer"></textarea>
    </div>
     <br/><br/> <br/>
    <input type="submit" name="savepost" class="btn btn-primary" />
  </form>
</fieldset>
