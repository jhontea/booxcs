<body class="sign-in-up">
    <!-- message -->
    <?php
        $msg = $this->session->flashdata('msg');
        if(!empty($msg)) {
            if($msg == "duplicate"){
    ?>
    <div class="alert alert-danger" role="alert"><center><?php echo $msg ?></center></div>
    <?php
            }
            else{
    ?>
    <div class="alert alert-success" role="alert"><center><?php echo $msg ?></center></div>
    <?php
            }
        }
    ?>
    <section>

        <div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h3>Register Here</h3>
						<h5>Personal Information</h5>
						<div class="sign-u">
                            <?php echo form_open("register/process"); ?>
							<div class="sign-up1">
								<h4>Username :</h4>
							</div>
							<div class="sign-up2">
								<input name="username" type="text" placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Full Name :</h4>
							</div>
							<div class="sign-up2">
								<input name="nama" type="text" placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address :</h4>
							</div>
							<div class="sign-up2">
								<input name="email" type="text" placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<h6>Login Information</h6>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password :</h4>
							</div>
							<div class="sign-up2">
								<input name="password" type="password" placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sub_home">
							<div class="sub_home_left">
								<input type="submit" value="Submit">
                                <?php echo form_close(); ?>	 
							</div>
							<div class="sub_home_right">
								<p>Go Back to <a href="<?php echo base_url() ?>c_login">Login</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
        
        <!--footer section start-->
        <footer>
            <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
        </footer>
        <!--footer section end-->
	</section>
</body>
</html>