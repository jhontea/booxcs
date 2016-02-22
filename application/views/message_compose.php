<?php
$msg = $this->session->flashdata('msg');
if(!empty($msg)) {
    echo $msg; 
}
?>

            <div id="page-wrapper">
				<div class="graphs">
                    
                    <h3 class="blank1">Compose Message</h3>
                    
                    <div class="xs">
						<div class="col-md-8 inbox_right">
							<div class="Compose-Message">               
								<div class="panel panel-default">
									<div class="panel-heading">
										Compose New Message 
									</div>
									<div class="panel-body panel-body-com-m">
										<div class="alert alert-info">
											Please fill details to send a new message
										</div>
										<?php echo form_open(base_url().'message/send/')?>
											<hr>
												<label>Subject : </label>
												<input name="subject" type="text" class="form-control1 control3">
												<label>Message : </label>
												<textarea name="message" rows="6" class="form-control1 control2"></textarea>
											<hr>
											<input type="submit" value="Send Message">
										<?php echo form_close() ?>
									</div>
								 </div>
							  </div>
						</div>
						<div class="clearfix"> </div>
					</div>

                </div>
            </div>

        </div>
    </section>