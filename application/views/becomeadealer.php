<section id="services" class="section">
 <div class="container">
    <div class="section-header">
       <!-- <h2 class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">CAREER</h2> -->
       <h2 class="section-title  wow fadeInLeft"  data-wow-delay="0.2s">BECOME A DEALER</h2>
    </div>
    <div class="row">
       <div class="col-md-12 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
            <!-- <h4>Join Our Databank</h4> -->
            <div class="col-md-12">
             <form role="form" id="postform" action="<?php echo site_url().'becomeadealer/create';?>"  method="post" enctype="multipart/form-data">
                <div class="col-md-6" style="float: left;">
                  <div class="form-group">
                    <label for="your-name">Name *</label>
                    <input type="text" class="form-control" id="your-name"  name="your-name" value="" />
                  </div>                  
                  <div class="form-group">
                    <label for="your-number">Contact Number *</label>
                    <input type="text" class="form-control" id="your-number"  name="your-number" value="" />
                  </div>
                  <div class="form-group">
                    <label for="your-state">State *</label>
                    <input type="text" class="form-control" id="your-state"  name="your-state" value="" />
                  </div>
                  <div class="form-group">
                    <label for="your-curent-business">Current Business</label>
                    <input type="text" class="form-control" id="your-curent-business"  name="your-curent-business" value="" />
                  </div>
                  <div class="form-group">
                    <label for="your-turnover">Turnover Of Business</label>
                    <input type="text" class="form-control" id="your-turnover"  name="your-turnover" value="" />
                  </div>
                </div>
                <div class="col-md-6" style="float: left;">
                  <div class="form-group">
                    <label for="your-email">E-mail *</label>
                    <input type="text" class="form-control" id="your-email"  name="your-email" value="" />
                  </div>
                  <div class="form-group">
                    <label for="your-qualification">Qualification *</label>
                    <input type="text" class="form-control" id="your-qualification"  name="your-qualification" value="" />
                  </div>
                  <div class="form-group">
                    <label for="your-city">City *</label>
                    <input type="text" class="form-control" id="your-city"  name="your-city" value="" />
                  </div>   
                  <div class="form-group">
                    <label for="your-firm">Name Of Firm</label>
                    <input type="text" class="form-control" id="your-firm"  name="your-firm" value="" />
                  </div>  
                  <div class="form-group">
                    <label for="which-bigger">Which is bigger, 2 or 8?</label>
                    <input type="text" class="form-control" id="which-bigger"  name="which-bigger" value="" />
                  </div>            
                </div>
                <input type="submit" value="Send Message" name="savepost" class="btn btn-success" />
              </form>
            </div>
          </div>
       </div>
    </div>
 </div>
</section>