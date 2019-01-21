
</div></div></div>
				<!-- end:: Body -->
				
<!-- begin::Footer -->
<footer class="m-grid__item		m-footer ">
	<div class="m-container m-container--fluid m-container--full-height m-page__container">
		<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
			<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
					2018 &copy; KivaStudio powered by <a href="http://trixno.com/" class="m-link">Trixno</a>
				</span>
			</div>	
		</div>
	</div>
</footer>
<!-- end::Footer -->		
		

</div>
<!-- end:: Page -->

    	<!--begin::Base Scripts -->        
    	    	<script src="<?php echo base_url();?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		    	<script src="<?php echo base_url();?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Base Scripts -->   

         
        <!--begin::Page Vendors --> 
                <script src="<?php echo base_url();?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
                <!--end::Page Vendors -->  
          

        
        
                    
        <!--begin::Page Snippets --> 
                <script src="<?php echo base_url();?>assets/app/js/dashboard.js" type="text/javascript"></script>
                <!--end::Page Snippets -->   
        <!--begin::Page Resources --> 
                <script src="<?php echo base_url();?>assets/demo/default/custom/components/datatables/base/html-table.js" type="text/javascript"></script>
                <!--end::Page Resources -->   
      <script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
            </body>
    <!-- end::Body -->
</html>