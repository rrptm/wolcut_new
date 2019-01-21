<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Brand
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_member"); echo form_open_multipart("home/update_brand/$b_id", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Name:</label>
								<div class="col-lg-6">
									<input type="hidden" class="form-control m-input" name="b_id" placeholder="" value="<?php echo $b_id;?>">
									<input type="text" class="form-control m-input" name="b_name" placeholder="" value="<?php echo $b_name;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Description:</label>
								<div class="col-lg-6">
									<textarea class="form-control m-input" name="b_descr" id="exampleTextarea" rows="3"><?php echo $b_descr;?></textarea>
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
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/User Progress -->  </div></div>