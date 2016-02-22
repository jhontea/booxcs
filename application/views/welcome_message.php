
<body class="sign-in-up">
    <!-- message -->
    <?php
        $msg = $this->session->flashdata('msg');
        if(!empty($msg)) {
    ?>
    <div class="alert alert-danger" role="alert"><center><?php echo $msg ?></center></div>
    <?php
        }
    ?>
    <section>
        <div id="page-wrapper" class="sign-in-wrapper">
            <div class="graphs">
                <div class="sign-in-form">
                    <div class="sign-in-form-top">
                        <p><span>Welcome to</span> <a href="http://boox.asia/#/">CS Boox Technology</a></p>
                    </div>
                    <div class="signin">
                        <?php echo form_open("c_login/process"); ?>
                        <div class="log-input">
                            <div class="log-input-left">
                               <input name ="username" type="text" class="user" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">
                               <input name="password" type="password" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" value="Login to your account">
                    <?php echo form_close(); ?>	 
                    </div>
                    <div class="new_people">
                        <h4>For New People</h4>
                        <p></p>
                        <a href="<?php echo base_url() ?>register">Register Now!</a>
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