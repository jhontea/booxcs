<?php
    $msg = $this->session->flashdata('msg');
    if(!empty($msg)) {
        if($msg == "duplicate"){
?>
<div class="alert alert-danger" role="alert"><center>Username sudah ada</center></div>
<?php
        }
        else{
?>
<div class="alert alert-success" role="alert"><center><?php echo $msg ?></center></div>
<?php
        }
    }
    
?>

            <div id="page-wrapper">
				<div class="graphs">
                    
                    <h3 class="blank1">Profile</h3>
        
                    <?php foreach($member as $m): ?>
					
                    <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<div class="form-horizontal">
                                <?php echo form_open("user/update/"); ?>
								<div class="form-group">
									<label for="smallinput" class="col-sm-2 control-label label-input-sm">Username</label>
									<div class="col-sm-8">
										<input name="username" value="<?php echo $m['username']; ?> " type="text" class="form-control1 input-sm" id="smallinput" placeholder="username">
									</div>
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Full Name</label>
									<div class="col-sm-8">
										<input name="nama" value="<?php echo $m['nama']; ?> " type="text" class="form-control1" id="mediuminput" placeholder="Full name">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">Email</label>
									<div class="col-sm-8">
										<input name="email" value="<?php echo $m['email']; ?> " type="text" class="form-control1 input-lg" id="largeinput" placeholder="email">
									</div>
								</div>
                                <div class="sub_home">
                                    <div class="sub_home_left">
                                        <input type="submit" value="Submit">
                                        <?php endforeach ?>
                                        <?php echo form_close(); ?>	 
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
							</div>
						</div>
					</div>
                    
                </div>
            </div>

        </div>
    </section>