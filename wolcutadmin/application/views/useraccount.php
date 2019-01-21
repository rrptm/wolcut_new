<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
			    			    
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Client Details
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
					<button  class="btn" onclick="exportTableToExcel('html_table', 'Download')">Download .xsl</button>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<th title="Field #2">Payment Mode</th>
				<th title="Field #3">Added By</th>
				<th title="Field #4">Amount</th>
				<th title="Field #5">Transaction</th>
				<th title="Field #4">Time</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($query as $row) {?>
			<tr>
				<td><?php echo $row->p_type;?></td>
				<td><?php echo $row->a_username;?></td>
				<td>Rs <?php echo $row->u_amount;?></td>
				<td><?php echo $row->p_c;?></td>
				<td><?php 
                          $time = date(' dS M Y', strtotime($row->timestatus));
                        echo $time; ?></td>
			</tr>
			<?php }?>
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
</div>		        </div>
			    		    </div>

				
		
				<!-- end:: Body -->
