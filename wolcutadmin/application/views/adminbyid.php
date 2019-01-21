<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/member Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Update Member
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_member"); echo form_open_multipart("home/update_member/$a_id", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	
						<input type="hidden" name="a_id" value="<?php echo $a_id;?>">
			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">User Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="a_username" placeholder="" value="<?php echo $a_username;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Contact:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="a_contact" placeholder="" value="<?php echo $a_contact;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Designation</label>
								<div class="col-lg-6">
									<select class="form-control m-input" name="a_design" id="exampleSelect1">
										<option value="Admin">Admin</option>
										<option value="Vendor">Vendor</option>
										<option value="Billing">Billing</option>
									</select>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Password:</label>
								<div class="col-lg-6">
									<input type="Password" class="form-control m-input" name="a_pass" placeholder="" value="<?php echo $a_pass;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Email:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="a_mail" placeholder="" value="<?php echo $a_mail;?>">
								</div></div>
								
							<div class="m-form__group form-group row">
								<label for="exampleSelect1" class="col-lg-2 col-form-label">Status:</label>
								<div class="col-lg-2">
									<select class="form-control m-input" name="a_status" id="exampleSelect1">
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

<!--end:: Widgets/member Progress -->  </div></div>