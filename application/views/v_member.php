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
									  <h5><?php echo $message_total ?> <span>message</span></h5>
									  <div class="grow">
										<p>Message</p>
									  </div>
									</div>
								</div>
							</div>
                            </a>
                            
                            <a href="<?php echo base_url() ?>unread/message">
							<div class="col-md-3 widget widget1">
								<div class="r3_counter_box">
									<i class="fa fa-comments"></i>
									<div class="stats">
									  <h5><?php echo $reply_total ?> <span>reply</span></h5>
									  <div class="grow grow3">
										<p>Reply</p>
									  </div>
									</div>
								</div>
							</div>
                            </a>    
                                
							<div class="clearfix"> </div>
						</div>
					</div>
                    <br />
                    <h3 class="blank1">Information</h3>
                    
                    
                    <div class="panel-body panel-body-inputin">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <h3><span class="label label-success">Message</span></h3>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group in-grp1">
                                        <p>Total Message</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <h3><span class="label label-danger">Reply</span></h3>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group in-grp1">
                                        <p>Replied Message</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <h3><span class="label label-success">Open</span></h3>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group in-grp1">
                                        <p>Message being resolve</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">
                                    <h3><span class="label label-danger">Close</span></h3>
                                </label>
                                <div class="col-md-8">
                                    <div class="input-group in-grp1">
                                        <p>Message has been solving</p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>