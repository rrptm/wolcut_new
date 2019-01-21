<div class="row">
	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<!--begin::Form-->

	        <?php $attributes = array("name" => "seo"); echo form_open("product/seo/$p_id", $attributes);?>
			<div class="m-form m-form--label-align-right">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								SEO Details
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">	
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<div class="col-lg-6">
								<input type="hidden" class="form-control m-input" name="p_id" value="<?php echo $p_id;?>">
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Meta Title:</label>
							<div class="col-lg-6">
								<input type="text" class="form-control m-input" name="mtitle" placeholder="Enter Meta Title" value="<?php echo $mtitle;?>">
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Meta Description:</label>
							<div class="col-lg-6">
								<input type="text" class="form-control m-input" name="mdescr" placeholder="Enter Description" value="<?php echo $mdescr;?>">
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-2 col-form-label">Meta Keyword :<br>(, Seprated)</label>
							<div class="col-lg-6">
								<input type="text" class="form-control m-input" name="mkey" placeholder="Enter Keyword (, Seprated)" value="<?php echo $mkey;?>">
							</div>
						</div>
		            </div>
	            </div>
	            <div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						<div class="row">
							<div class="col-lg-2"></div>
							<div class="col-lg-6">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
			<!--end::Form-->
		</div></div></div>
