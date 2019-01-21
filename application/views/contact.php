 <div id="contact_up " style="padding-top: 10vh;background-color: #E7E7E7;padding-top: 150px;">
        <div id="content ">
          <div class="heading text-center">
            <h2>Contact Us</h2>
          </div>
        <div id="contact" class="container">
          <div class="row">
            <div class="col-lg-8">
              <section class="bar">
                <p class="text-sm">Please feel free to contact us.</p>
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
            <div class="col-lg-4">
              <section class="bar mb-0 text-center">
                <h3 class="text-capitalize">Address</h3>
                <p class="text-sm">3087, 2nd Floor <br>Gali Mahajan<br>Bazar Sita Ram <br>Delhi-110006</p>
                <p> <i class="fa fa-phone"></i> <strong> 011-23252974 <br><i class="fa fa-phone"></i> 011-23262412 <br> <i class="fa fa-phone"></i> +91 9810157197 </strong></p>
                <p>
                  <i class="fa fa-envelope"></i> <strong><a href="mailto:" style="color:#E83A63">sales@wolcut.com </a></strong>
                </p>
              </section>
            </div>
          </div>
        </div>
        
        </div>
      </div>

    