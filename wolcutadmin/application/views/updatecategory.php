<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Category
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
					<i class="m-menu__link-icon fa fa-user-plus"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		    <div class="tab-pane active" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_member"); echo form_open_multipart("home/update_category/$c_id", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	
                        <input type="hidden" name="c_id" value="<?php echo $c_id;?>"?>
			            <div class="m-form__section m-form__section--middle">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label">Name:</label>
								<div class="col-lg-6">
									<input type="text" class="form-control m-input" name="c_name" placeholder="" value="<?php echo $c_name;?>">
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Description:</label>
								<div class="col-lg-6">
									<textarea class="form-control m-input" name="c_descr" id="exampleTextarea" rows="3"><?php echo $c_descr;?></textarea>
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