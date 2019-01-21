<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Product Details
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
</div>				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a href="<?php echo base_url();?>index.php/product/insertproduct" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-plus"></i>
							<span>Add New</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<!--<th title="Field #1">Product ID</th>-->
				<th title="Field #2">Product Name</th>
				<th title="Field #3">Description</th>
				<th title="Field #6">sp</th>
				<th title="Field #7">Stock</th>
				<th title="Field #8">Category</th>
				<th title="Field #11">Product Status</th>
				<th title="Field #12">Edit</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $row) {?>
			<tr>
				<!--<td><?php echo $row->p_id;?></td>-->
				<td><?php echo $row->p_name;?></td>
				<!--<td><?php echo $row->p_desc;?></td>-->
				<td><?php echo $row->p_adddesc;?></td>
				<td><?php echo $row->p_sp;?></td>
				<td><span <?php if($row->p_stock<=$row->p_mstock){?>style="color:red;"<?php }?>><?php echo $row->p_stock;?> </span></td>
				<td><?php if(!empty($row->c_name)){echo $row->c_name;}?></td>
				<td><a href="<?php echo base_url();?>index.php/product/toggle_product/<?php echo $row->p_id;?>/<?php echo $row->p_status;?>" class="btn btn-small m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							
							<span>
				    <?php if($row->p_status=="1"){ echo "Active";}else{echo "Pending";}?></span>
						</span>
					</a>
				
				</td>
				<td>
                        
                        <a href="<?php echo base_url();?>index.php/product/product_stock_id/<?php echo $row->p_id;?>" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Add">
                          
                          <i class="la la-plus"></i>
                        </a>
                        <a href="<?php echo base_url();?>index.php/product/seo/<?php echo $row->p_id;?>" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="SEO">
                          <i class="la la-line-chart"></i>
                        </a>
                        <a href="<?php echo base_url();?>index.php/product/productimage/<?php echo $row->p_id;?>" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Add Image">
                          <i class="la la-file-photo-o"></i>
                        </a>
                        <a href="<?php echo base_url();?>index.php/product/product_id/<?php echo $row->p_id;?>" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                          <i class="la la-edit"></i>
                        </a>
                        <a href="<?php echo base_url();?>index.php/product/duplicate/<?php echo $row->p_id;?>" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Duplicate">
                          <i class="la la-copy"></i>
                        </a>
                </td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
</div>		        </div>
			    		    </div>

		<!--begin::Modal-->
<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->		
		
				<!-- end:: Body -->
