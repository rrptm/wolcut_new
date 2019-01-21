<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
        <meta charset="utf-8" />
        
        <title>Wolcut | Dashboard</title>
        <meta name="description" content="Latest updates and statistic charts"> 

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       

        <!--begin::Web font -->
        <script src="<?php echo base_url();?>assets/vendors/base/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
         <script language="JavaScript">
        function fullScreen(theURL) {
            window.open(theURL, '', 'fullscreen=yes, scrollbars=auto');
        }
        // End -->
    </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->  

                 
        <!--begin::Page Vendors --> 
                <link href="<?php echo base_url();?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Page Vendors -->
         

				<link href="<?php echo base_url();?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
				<link href="<?php echo base_url();?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
		        <!--end::Base Styles -->

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/demo/default/media/img/logo/favicon.ico" /> 
</head>
    <!-- end::Head -->

    
    <!-- end::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
	
				<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
	<div class="m-container m-container--fluid m-container--full-height">
		<div class="m-stack m-stack--ver m-stack--desktop">		
			<!-- BEGIN: Brand -->
<div class="m-stack__item m-brand  m-brand--skin-dark ">
	<div class="m-stack m-stack--ver m-stack--general">
		<div class="m-stack__item m-stack__item--middle m-brand__logo">
			<a href="<?php echo base_url();?>" class="m-brand__logo-wrapper">
			<img alt="" src="<?php echo base_url();?>assets/demo/default/media/img/logo/logosm.png"/>
			</a>  
		</div>
		<div class="m-stack__item m-stack__item--middle m-brand__tools">
							
				<!-- BEGIN: Left Aside Minimize Toggle -->
				<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
					<span></span>
				</a>
				<!-- END -->
			
							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
				<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
			
						

							<!-- BEGIN: Responsive Header Menu Toggler -->
				<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
					<span></span>
				</a>
				<!-- END -->
						

			<!-- BEGIN: Topbar Toggler -->
			<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
				<i class="flaticon-more"></i>
			</a>
			<!-- BEGIN: Topbar Toggler -->
		</div>
	</div>
</div>
<!-- END: Brand -->			
			<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
								<!-- BEGIN: Horizontal Menu -->
<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>

<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >	
	
</div>
<!-- END: Horizontal Menu -->								<!-- BEGIN: Topbar -->
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">

	
	<div class="m-stack__item m-topbar__nav-wrapper">
		<ul class="m-topbar__nav m-nav m-nav--inline">
			<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
	<a href="#" class="m-nav__link m-dropdown__toggle">
	<span class="m-topbar__userpic" style="background-color:#fff;border-radius:50%;">
	<img src="<?php echo base_url();?>assets/demo/default/media/img/logo/logosmb.png" class="m--img-rounded m--marginless m--img-centered" alt=""/>
	</span>
	<span class="m-topbar__username m--hide"><?php echo $this->session->userdata('a_username'); ?><br><?php echo $this->session->userdata('a_design'); ?></span>					
	</a>
	<div class="m-dropdown__wrapper">
		<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
		<div class="m-dropdown__inner">
			<div class="m-dropdown__header m--align-center" style="background: url('<?php echo base_url();?>assets/app/media/img/misc/user_profile_bg.jpg'); background-size: cover;">
				<div class="m-card-user m-card-user--skin-dark">
					<div class="m-card-user__pic" style="background-color:#fff;">
						<img src="<?php echo base_url();?>assets/demo/default/media/img/logo/logosmb.png" class="m--img-rounded m--marginless" alt=""/>
					</div>
					<div class="m-card-user__details">
						<span class="m-card-user__name m--font-weight-500"><?php echo $this->session->userdata('a_username'); ?><br><?php echo $this->session->userdata('a_design'); ?></span>
					</div>
				</div>
			</div>
			<div class="m-dropdown__body">
				<div class="m-dropdown__content">
					<ul class="m-nav m-nav--skin-light">
						<li class="m-nav__section m--hide">
							<span class="m-nav__section-text">Section</span>
						</li>
						<li class="m-nav__item">
							<a href="indexa80c.html?page=header/profile&amp;demo=default" class="m-nav__link">
								<i class="m-nav__link-icon flaticon-profile-1"></i>
								<span class="m-nav__link-title">  
									<span class="m-nav__link-wrap">      
										<span class="m-nav__link-text">My Profile</span>      
									</span>
								</span>
							</a>
						</li>
						<li class="m-nav__separator m-nav__separator--fit">
						</li>
						<li class="m-nav__item">
							<a href="<?php echo base_url();?>index.php/login/logout" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</li>
					
					
					</ul>
	</div>
</div>
<!-- END: Topbar -->			</div>
		</div>
	</div>
</header>
<!-- END: Header -->		
		<!-- begin::Body -->
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
			
											<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">	
	<!-- BEGIN: Aside Menu -->
	<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		data-menu-vertical="true"
		 data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
		>		
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" ><a  href="<?php echo base_url();?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title">  <span class="m-menu__link-wrap">      <span class="m-menu__link-text">Dashboard</span></a></li>
			
			<?php if($this->session->userdata('a_design')=="Admin" || $this->session->userdata('a_design')=="Vendor"){?>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon fa fa-product-hunt"></i>
                    <span class="m-menu__link-text">Products</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                            <span class="m-menu__link"><span class="m-menu__link-text">Product Details</span></span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="<?php echo base_url();?>index.php/product" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Product Details</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" >
                            <a  href="<?php echo base_url();?>index.php/product/insertproduct" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">Add Product</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
			<?php }?>
			<?php if($this->session->userdata('a_design')=="Admin"){?>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            	<a  href="#" class="m-menu__link m-menu__toggle">
            		<i class="m-menu__link-icon fa fa-briefcase"></i>
            		<span class="m-menu__link-text">Mangement</span>
            		<i class="m-menu__ver-arrow la la-angle-right"></i>
            	</a>
            	<div class="m-menu__submenu ">
            		<span class="m-menu__arrow"></span>
            		<ul class="m-menu__subnav">
            			<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
            				<span class="m-menu__link"><span class="m-menu__link-text">Category</span></span>
            			</li>
            			<li class="m-menu__item " aria-haspopup="true" >
            				<a  href="<?php echo base_url();?>index.php/home/category" class="m-menu__link ">
            					<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
            					<span class="m-menu__link-text">Category</span>
            				</a>
            			</li>
            			<li class="m-menu__item " aria-haspopup="true" >
            				<a  href="<?php echo base_url();?>index.php/home/brand" class="m-menu__link ">
            					<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
            					<span class="m-menu__link-text">Brand</span>
            				</a>
            			</li>
					</ul>
				</div>
			</li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            	<a  href="<?php echo base_url();?>index.php/home/members" class="m-menu__link m-menu__toggle">
            		<i class="m-menu__link-icon fa fa-group"></i>
            		<span class="m-menu__link-text">Members</span>
            	</a>
			</li>
		    <?php }?>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
            	<a  href="#" class="m-menu__link m-menu__toggle">
            		<i class="m-menu__link-icon fa fa-gear"></i>
            		<span class="m-menu__link-text">Settings</span>
            		<i class="m-menu__ver-arrow la la-angle-right"></i>
            	</a>
            	<div class="m-menu__submenu ">
            		<span class="m-menu__arrow"></span>
            		<ul class="m-menu__subnav">
            			<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
            				<span class="m-menu__link"><span class="m-menu__link-text">Settings</span></span>
            			</li>
            			<li class="m-menu__item " aria-haspopup="true" >
            				<a  href="<?php echo base_url();?>index.php/home/personal_d" class="m-menu__link ">
            					<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
            					<span class="m-menu__link-text">Personal Details</span>
            				</a>
            			</li>
            			<li class="m-menu__item " aria-haspopup="true" >
            				<a  href="<?php echo base_url();?>index.php/home/setting_pass" class="m-menu__link ">
            					<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
            					<span class="m-menu__link-text">Password</span>
            				</a>
            			</li>
					</ul>
				</div>
			</li>
        </ul>
	</div>
	<!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->							
		   	<div class="m-grid__item m-grid__item--fluid m-wrapper">
<?php if(!empty($this->session->flashdata('msg'))){?>
<div id="messagetop" style="background-color:#f4f4f4;height:120px;display:block;position:fixed;left:0;top:0;margin-left:25vw;width:50vw;margin-right:25vw;margin-top:20vh;z-index: 5000;">
<div class="col-md-12 col-xs-12" style="padding-top:30px;">
<h4 class="text-right"><a onclick="javascript:msghidetop();" style="color:#000;font-size:20px;"><span aria-hidden="true" style="padding-right:15px;font-size:36px;">×</span></a></h4>
<h4 class="text-center">
<?php echo $this->session->flashdata('msg'); ?></h4></div>
</div>
<?php }?>
<script type="text/javascript">
      function msghidetop()
      { $("#messagetop").css({"display":"none"});
       }
      </script>
<div class="m-content">
			    			    
