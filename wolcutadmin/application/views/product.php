<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Add Product
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_product"); echo form_open_multipart("product/add_Product", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Product Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="p_name" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Product Description:</label>
								<div class="col-lg-6">
									<textarea type="text" class="form-control m-input" name="p_desc" placeholder=""></textarea>
								</div>
							</div>
							<div class="m-form__group form-group row" >
								<label class="col-lg-2 col-form-label"  for="exampleTextarea">Color:</label>
								<div class="col-lg-6">
									<input type="number" class="form-control m-input" name="p_color" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row" >
								<label class="col-lg-2 col-form-label"  for="exampleTextarea">Grit:</label>
								<div class="col-lg-6">
									<input type="number" class="form-control m-input" name="p_grit" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row" >
								<label class="col-lg-2 col-form-label"  for="exampleTextarea">Thicknesss:</label>
								<div class="col-lg-6">
									<input type="number" class="form-control m-input" name="p_thick" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Specification:</label>
								<div class="col-lg-6">
									<textarea type="text" class="form-control m-input" name="p_adddesc" placeholder=""></textarea>
								</div>
							</div>
							<div class="m-form__group form-group row" style="display: none;">
								<label class="col-lg-2 col-form-label"  for="exampleTextarea">Selling Price:</label>
								<div class="col-lg-6">
									<input type="number" class="form-control m-input" name="p_sp" placeholder="">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Sizes:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="p_stock" placeholder="">
								</div>
								<label class="col-lg-2 col-form-label" style="display: none;" for="exampleTextarea">Min Stock:</label>
								<div class="col-lg-2" style="display: none;">
									<input type="number" class="form-control m-input" name="p_mstock" placeholder="">
								</div>
							</div>
							
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Brand:</label>
								<div class="col-lg-6">
								    <select class="form-control m-input" name="p_brand" id="exampleSelect1">
										<?php foreach ($query2 as $member) { if($member->b_status=="1") {?>
										<option value="<?php echo $member->b_id;?>"><?php echo $member->b_name;?> </option>
										<?php }}?>	
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Category:</label>
								<div class="col-lg-6">
								    <select class="form-control m-input" name="p_category" id="exampleSelect1">
										<?php foreach ($query1 as $member) { if($member->c_status=="1") {?>
										<option value="<?php echo $member->c_id;?>"><?php echo $member->c_name;?> </option>
										<?php }}?>	
									</select>
								</div>
							</div>
							
														
							
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Image:</label>
								<div class="col-lg-6">
									<input type="file" name="picture" class="custom-file-input" id="customFile">
								  	<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
							</div>
						
							
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Status:</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="p_status" id="exampleSelect1">
										<option value="1">Active</option>
										<option value="0">Disabled</option>
									</select>
								</div>
							</div>
						</div>
		            </div>
		            <div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-2"></div>
								<div class="col-lg-6">
									<button type="submit" class="btn btn-primary" value="Upload">Submit</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
				<!--end::Form-->
			</div>
		</div>
	</div>

<!--end:: Widgets/User Progress -->  </div></div>