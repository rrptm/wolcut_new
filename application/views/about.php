<div class="container-fluid bg pt-5 mt-3" >
        <div class="container">
        <div class="row" style="padding-left: 15px;padding-right: 15px;margin-right: auto;
    margin-left: auto;">
            <div class="col-md-12 heading text-center" style="color:#fff;padding-top: 60px; " >
                <h2>ABOUT WOLCUT</h2>
            </div>
            <p class="lead text-justify"style="color:#fff;">Wolcut is the leading supplier of coated, bonded and polishing abrasives materials catering to a wide customer base in various industries such as automobiles, sanitary ware, utensils as well as paint/decorative application.We are known for our fair trade practices amongst our customers and suppliers, and enjoy a strong goodwill in the industry.We have a vast network of dealers spread across the entire country enabling us to feed the requirements of tier 2 and tier 3 cities in India, catching the development cycle.</p>
        </div>  
      </div></div>
          <section class="bar"style="background-color: #E7E7E7;" >
        <div class="container text-center">
          <div class="col-md-12">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="box-simple1">

                  <img src="<?php echo base_url();?>media/img/shield.png" alt="" class="img-fluid" style="padding: 10% 30%;">
                  <h3 class="h4" style="color:#000;">Quality Above Everything Else </h3>
                  <p style="color:#000;">Wolcut's prime focus is creating quality equipment with practical product baskets for your brand.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="box-simple1">
                  <img src="<?php echo base_url();?>media/img/economic.png" alt="" class="img-fluid" style=" padding: 10% 30%;">
                  <h3 class="h4" style="color:#000;">Premium and Economic Pricing </h3>
                  <p style="color:#000;">Wolcut makes product lines that ranges from premium quality to economic pricing.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="box-simple1">
                  <img src="<?php echo base_url();?>media/img/briefcase.png" alt="" class="img-fluid" style=" padding: 10% 30%;">
                  <h3 class="h4" style="color:#000;">Decades Of Experience</h3>
                  <p style="color:#000;">Wolcut started in 1983 and has 35 years of experience in building quality abrasives. We have had long and continuous associations with our customers, re-iterating our commitments to our channel partners.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="box-simple1">
                  <img src="<?php echo base_url();?>media/img/clock.png" alt="" class="img-fluid" style=" padding: 10% 30%;">
                  <h3 class="h4" style="color:#000;">On Time Every Time</h3>
                  <p style="color:#000;">Wolcut believes in giving the best service to our customer to fulfill all their needs/ requirements and we never miss a deadline.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </div>
      </div>

       <div id="contact_up" >
        <div id="content my-5" >
          <div class="container-fluid" style="background-color: #111216;">
              <div class="col-md-12 heading text-center" style="color:#FBF9FA;padding-top: 15px; " >
                  <h2>Contact Us</h2>
              </div>
          </div> 
        <div id="contact" style="background-color: #212226">
          <div class="container" class="row">
            <div class="col-lg-12">
              <section class="bar1">
                <p class="text-sm" style="color:#545454">Please feel free to contact us.</p>
                <?php $attributes = array("name" => "contact"); echo form_open_multipart("contact", $attributes);?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Name</label>
                        <input id="firstname" type="text" class="form-control" name="c_name" style="background-color: #f8f8f8;">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >Company Name</label>
                        <input id="contact" type="text" class="form-control" name="c_comp" style="background-color: #f8f8f8;">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >Contact Number</label>
                        <input id="contact" type="number" class="form-control" name="c_cont" style="background-color: #f8f8f8;">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >City</label>
                        <input id="contact" type="text" class="form-control" name="c_city" style="background-color: #f8f8f8;">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >Country</label>
                        <input id="contact" type="text" class="form-control" name="c_country" style="background-color: #f8f8f8;">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">I am a</label>
                        <select class="custom-select" name="c_person" style="background-color: #f8f8f8;" id="inputGroupSelect03" aria-label="Example select with button addon">
                          <option value="Buyer">Buyer </option>
                          <option value="Distributor">Distributor</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" name="c_message" style="background-color: #f8f8f8;"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Submit</button>
                    </div>
                  </div>
                <?php echo form_close(); ?>
              </section>
            </div>
            
        </div>
        
        </div>
      </div></div>