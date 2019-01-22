<div class="container my-5">
	<div class="row my-5">
		<div class="offset-md-3 col-md-6 my-5">
			<div class="col-md-12 text-center my-5">
		      	<h1>Login</h1>
		      	<hr>
	    	</div>
	    	<?php $attributes = array("name" => "loginform");
	            echo form_open("login", $attributes);?>
		       	<div class="col-md-12">
			    	<label>Email<span style="color: red;">*</span></label>
			    	<input type="email" class="th-btn-inv col-md-12 th-form" placeholder="Email" name="u_mail">
			  	</div>
			  	<div class="col-md-12">
			    	<label>Password<span style="color: red;">*</span></label>
			    	<input type="password" class="th-btn-inv col-md-12 th-form" placeholder="Password" name="u_pass">
			  	</div>
	      		<div class="col-md-12">
	        	<button class="btn th-btn pull-right" style="width: 100%;" type="submit">Submit</button>
	      		</div>
			<?php echo form_close(); ?>
			<p class="text-center"><?php echo $this->session->flashdata('msg'); ?></p>
			<hr>
			<p class="text-center">Don't have a account? <a href="<?php echo base_url("index.php/signup"); ?>" class="th-a">Creat New Account</a></p>
			<p class="text-center">Forgot Password? <a href="<?php echo base_url("index.php/forget"); ?>" class="th-a">Recover your Password</a></p>
	    </div>
	</div>
</div>