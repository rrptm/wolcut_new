<div class="container  mt-5" style="padding-top: 10vh;padding-bottom: 10vh;">
        <div class="accordion mt-5" id="accordionExample">
          <div class="card"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <p class="pt-3" style="color:#fff;">
                  POLISHING ABRASIVES
                 <span> <img src="<?php echo base_url();?>media/img/arrow_down.png" alt="" class="img-fluid pull-right" width="20px" height="auto"></span>
                </p>

              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="POLISHING ABRASIVES"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?>
                    <div class="col-md-3">
                    <a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" >
                      <div style="background-image: url('<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->p_image;?>'); background-position: center;background-size:cover;height: 180px; width: 100% !important; 
  background-repeat: no-repeat;">
                      </div>
                      <!--<img src="<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->p_image;?>" alt="" class="img-fluid  mx-auto d-flex justify-content-center">  -->
                      <p class="text-center"><?php echo $row->p_name;?></p>
                    </a>
                  </div><?php }}?>
                </div>
              </div>
            </div>
          </div>
          <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <p class="pt-3" style="color:#fff;">
                  COATED ABRASIVES
                
                <span> <img src="<?php echo base_url();?>media/img/arrow_down.png" alt="" class="img-fluid pull-right" width="20px" height="auto"></span>
                </p>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  
                  <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="COATED ABRASIVES"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?><div class="col-md-3">
                    <a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" >
                      <div style="background-image: url('<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->p_image;?>'); background-position: center;background-size:cover;height: 180px; width: 100% !important; 
  background-repeat: no-repeat;">
                      </div>
                      <p class="text-center"><?php echo $row->p_name;?></p>
                      
                    </a>
                  </div><?php }}?>
                </div>
              </div>
            </div>
          </div>
          <div class="card" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <p class="pt-3" style="color:#fff;">
                  BONDED ABRASIVES
                
                <span> <img src="<?php echo base_url();?>media/img/arrow_down.png" alt="" class="img-fluid pull-right" width="20px" height="auto"></span>
                </p>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  
                  <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="BONDED ABRASIVES"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?><div class="col-md-3">
                    <a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" >
                      <div style="background-image: url('<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->p_image;?>'); background-position: center;background-size:cover;height: 180px; width: 100% !important; 
  background-repeat: no-repeat;">
                      </div>
                      <p class="text-center"><?php echo $row->p_name;?></p>
                      <span> 
                    </a>
                  </div><?php }}?>
                </div>
              </div>
            </div>
          </div>
          <div class="card" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <p class="pt-3" style="color:#fff;">
                  MORE
                
                <span> <img src="<?php echo base_url();?>media/img/arrow_down.png" alt="" class="img-fluid pull-right" width="20px" height="auto"></span>
                </p>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  
                  <?php $details=$this->user->showproduct();
                              foreach ($details as $row ) {if($row->c_name=="MORE"){
                              $p_category=str_replace(' ', '-', $row->c_name);$p_name=str_replace(' ', '-', $row->p_name);?><div class="col-md-3">
                    <a href="<?php echo base_url("index.php/product/details/$p_category/$p_name"); ?>" >
                      <div style="background-image: url('<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->p_image;?>'); background-position: center;background-size:cover;height: 180px; width: 100% !important; 
  background-repeat: no-repeat;">
                      </div>
                      <p class="text-center"><?php echo $row->p_name;?></p>
                      <span> 
                    </a>
                  </div><?php }}?>
                </div>
              </div>
            </div>
          </div>
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
                        <label >City</label>
                        <input id="contact" type="text" class="form-control" name="c_city" style="background-color: #f8f8f8;">
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
                        <label for="subject">I am a</label>
                        <select class="custom-select" name="c_person" style="background-color: #f8f8f8;" id="inputGroupSelect03" aria-label="Example select with button addon">
                          <option value="Buyer">Buyer </option>
                          <option value="Distributor">Distributor</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >Country</label>
                        <input id="contact" type="text" class="form-control" name="c_country" style="background-color: #f8f8f8;">
                      </div>

                      <div class="form-group pt-2">
                        <label >Company Name</label>
                        <input id="contact" type="text" class="form-control" name="c_comp" style="background-color: #f8f8f8;">
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea  rows="5" id="message" class="form-control" name="c_message" style="background-color: #f8f8f8; "></textarea>
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