<div class="row"><div class="col-lg-12">
    <!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Add Product Image
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
			<div class="tab-pane" id="m_widget4_tab3_content">
				<!--begin::Form-->
		        <?php $attributes = array("name" => "add_product"); echo form_open_multipart("product/productimage", $attributes);?>
				<div class="m-form m-form--label-align-right">
					<div class="m-portlet__body">	

			            <div class="m-form__section m-form__section--middle">
							<input type="hidden" class="form-control m-input" name="p_id" placeholder="" value="<?php echo $p_id;?>">
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label" for="exampleTextarea">Image:</label>
								<div class="col-lg-6">
									<input type="file" name="picture" class="custom-file-input" id="customFile">
								  	<label class="custom-file-label" for="customFile">Choose file</label>
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
			<div>
				<h3>Product Image</h3>
				<div class="row">
					<?php $i=0; foreach($query1 as $row) {$i++;?>
					<div class=" col-md-3 text-center">
						<img src="<?php echo base_url();?>../uploads/product/thumb/<?php echo $row->img;?>" class="img-fluid  p-2">
						<a href="" onclick="javascript:remove_image(<?php echo $row->id;?>);" class="btn btn-danger center-block">Remove</a>
	        			<input type="hidden" value="<?php echo $row->img; ?>" id="image_<?php echo $row->id;?>">
					</div>    
					<?php }?>
				</div>
			</div>
		</div>
	</div>

<!--end:: Widgets/User Progress -->  </div></div>
<script type="text/javascript">
    function remove_image(postid)
    {  var name =$('#image_'+postid).val();
        var r =confirm("Confirm to Delete");
        if (r == true) {
            $.ajax({
                    type: "POST",
                     url: "<?php echo site_url('product/remove_image');?>",
                    data:'&id='+postid+'&name='+name,
                    success: function (response) {
                    }
                });
} else {
    txt = "You pressed Cancel!";
}
    }
  </script>