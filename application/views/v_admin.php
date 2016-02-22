<?php
$msg = $this->session->flashdata('msg');
if(!empty($msg)) {
    echo $msg; 
}
?>

            <div id="page-wrapper">
				<div class="graphs">
                    <h3 class="blank1">Welcome to Customer Service Boox Technology</h3>
					<div class="widgets_top">
						<div class="col_3">
                            
                            <a href="<?php echo base_url() ?>message">
							<div class="col-md-3 widget widget1">
								<div class="r3_counter_box">
									<i class="fa fa-envelope"></i>
									<div class="stats">
									  <h5><?php echo $message_total_admin ?> <span>message</span></h5>
									  <div class="grow">
										<p>Total</p>
									  </div>
									</div>
								</div>
							</div>
                            </a>
                            
                            <a href="<?php echo base_url() ?>unread/message">
                            <div class="col-md-3 widget widget1">
								<div class="r3_counter_box">
									<i class="fa fa-envelope-o"></i>
									<div class="stats">
									  <h5><?php echo $message_unread ?> <span>message</span></h5>
									  <div class="grow">
										<p>Unread</p>
									  </div>
									</div>
								</div>
							</div>
                            </a>
                            
                            <a href="<?php echo base_url() ?>unread/comment">
							<div class="col-md-3 widget widget1">
								<div class="r3_counter_box">
									<i class="fa fa-comments"></i>
									<div class="stats">
									  <h5><?php echo $reply_total_admin ?> <span>reply</span></h5>
									  <div class="grow grow3">
										<p>New Reply</p>
									  </div>
									</div>
								</div>
							</div>
                            </a>
                            
                            <a href="<?php echo base_url() ?>user">
                            <div class="col-md-3 widget widget1">
                                <div class="r3_counter_box">
                                    <i class="fa fa-users"></i>
                                    <div class="stats">
                                      <h5><?php echo $member_total ?><span>Users</span></h5>
                                      <div class="grow grow1">
                                        <p>Users</p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                                
							<div class="clearfix"> </div>
                            
						</div>
					</div>
                    <br />
                    
                </div>
            </div>
        </div>
    </section>