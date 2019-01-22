 <div id="content" style="background-color: #212226;color: #fff; padding-top: 10vh;">
        <div class="container">
          <div class="row bar">
            <div class="col-lg-12">
              <div id="productMain" class="row">
                <div class="col-sm-7">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel" style="display: none;">
                    <div><img src="<?php echo base_url(); ?>uploads/product/thumb/<?php echo $p_image;?>" alt="" class="img-fluid"></div>
                    <?php if(!empty($query)){foreach ($query as $row) {?>
                    	<div><img src="<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->img; ?>" alt="" class="img-fluid"></div>
					<?php }}?>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?php echo base_url(); ?>uploads/product/thumb/<?php echo $p_image;?>" alt="" class="img-fluid"></button>
                    <?php
						if(!empty($query)){
						 foreach ($query as $row) {?><button class="owl-thumb-item"><img src="<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->img; ?>" alt="" class="img-fluid"></button>
					<?php }}?>
                  </div>
                </div>
                <div class="col-sm-5">
                  <h1 class="h2 text-white"><?php echo $p_name;?></h1>
                  <p class="text-white"><?php $desc=entity_decode($p_desc,$charset = NULL); echo auto_typography(html_escape($desc)); ?></p>
                  <div class="box">
                    <div class="row">
                    </div>
                  </div>
                  <div>
                     <h4 class="heading-light text-white"><b>Sizes :</b> <?php echo $p_stock;?></h4>
                     <h4 class="heading-light text-white"><b>Category:</b> <?php echo $c_name;?></h4>
                     <h4 class="heading-light text-white"><b>Specifications:</b><br><?php $adddesc=entity_decode($p_adddesc,$charset = NULL); echo auto_typography(html_escape($adddesc)); ?></h4>
                  </div>
                  

                </div>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5 ">
              </div>
              <div class="row mt-5 pt-5">
                <div class="col-lg-12 col-md-12 mt-5">
                  <div class="box text-uppercase mt-0 mb-small">
                    <h3 class="text-white">Related Products</h3>
                  </div>
                </div>
                <?php foreach ($query2 as $row) { $p_category1=str_replace(' ', '-', $c_name);$p_name=str_replace(' ', '-', $row->p_name);?>
                <div class="col-lg-4 col-md-4">
                  <a href="<?php echo base_url("index.php/product/details/$p_category1/$p_name"); ?>" >
                      <div style="background-image: url('<?php echo base_url(); ?>uploads/product/thumb/<?php echo $row->p_image;?>'); background-position: center;background-size:cover;height: 240px; width: 100% !important; 
  background-repeat: no-repeat;">
                      </div>
                      <br>
                      <p class="text-center"><?php echo $row->p_name;?></p>
                      
                    </a>
                </div>
            <?php }?>
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
   