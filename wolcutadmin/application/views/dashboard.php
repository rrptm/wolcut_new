
<div class="row">			
	<div class="col-xl-4">
		<!--begin:: Widgets/Top Products-->
<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Trends
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin::Widget5-->
		<div class="m-widget4">
			<div class="m-widget4__item">
				<div class="m-widget4__info">
					<span class="m-widget4__title">
					Staff  
					</span><br> 
					<span class="m-widget4__sub">
					Member
					</span>		 
				</div>
				<span class="m-widget4__ext">
					<span class="m-widget4__number m--font-danger"><?php $detail1=$this->admin->countvendor(); echo $detail1; ?></span>
				</span>	
			</div>
			<div class="m-widget4__item">
				<div class="m-widget4__info">
					<span class="m-widget4__title">
					User  
					</span><br> 
					<span class="m-widget4__sub">
					All User
					</span>		 
				</div>
				<span class="m-widget4__ext">
					<span class="m-widget4__number m--font-danger"><?php $detail1=$this->admin->countuser(); echo $detail1; ?></span>
				</span>	
			</div>
			<div class="m-widget4__item">
				<div class="m-widget4__info">
					<span class="m-widget4__title">
					Total Product  
					</span><br> 
					<span class="m-widget4__sub">
					All Warehouse
					</span>		 
				</div>
				<span class="m-widget4__ext">
					<span class="m-widget4__number m--font-danger"><?php $detail1=$this->admin->countproduct(); echo $detail1; ?></span>
				</span>	
			</div>
		</div>
		<!--end::Widget 5-->				 
	</div>
</div>
<!--end:: Widgets/Top Products-->	</div>
	<div class="col-xl-4">
		<!--begin:: Widgets/Activity-->

</div>
<!--End::Section-->
		</div>
	</div>
</div>

		