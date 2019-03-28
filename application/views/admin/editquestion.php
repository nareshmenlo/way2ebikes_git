<div class="page-header">
    <h3>Questions and Answers Management</h3>
</div>
<a class="btn btn-primary btn-sm pull-right " href="<?php echo base_url('questions'); ?>"> All Q&A's</a>
<br><br>
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Edit Question and Answer</legend>
    <?php if(validation_errors()!=""){?>
    	<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Error!</strong> <?php echo validation_errors(); ?>
    </div>
    <?php } ?>
  <form role="form" id="postform" action="<?php echo site_url().'questions/update/'.$question_details->id;?>"  method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="questionimage">Question</label>
        <input type="hidden" class="form-control col-md-8" name="id" value="<?php echo $question_details->id; ?>"  name="question"/>
        <input type="text" class="form-control col-md-8" id="question"  name="question" value="<?php echo $question_details->question; ?>" />
      </div>
      <br/><br/>
      <div class="form-group">
        <label for="questionimage">Answer</label>
        <textarea class="form-control col-md-8" id="answer"  name="answer">
          <?php echo $question_details->answer; ?>
        </textarea>
      </div>
        <br/><br/>
        <br/><br/>
      <input type="submit" value="update" name="savepost" class="btn btn-primary" />
      <a name="cancel_question" href="<?php echo site_url().'questions';?>" class="btn btn-danger" >Cancel</a>
  </form>
</fieldset>
