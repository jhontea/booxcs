<?php
    $msg = $this->session->flashdata('msg');
    if(!empty($msg)) {
        if($msg == "delete"){
?>
<div class="alert alert-danger" role="alert"><center>Pesan telah dihapus</center></div>
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
                    
                    
                    <h3 class="blank1">
                        <a href="<?php echo base_url() ?>message/"><span class="fa fa-arrow-circle-o-left"></span></a>
                        Read Message
                    </h3>
                    
                    <!-- Message -->
                    <div class="bs-example5" data-example-id="default-media">
						<div class="media">
						  <div class="media-body">
                            <?php
                                foreach($one_message_admin as $m): 
                            ?>
							<h4 class="media-heading">
                                <?php echo $m['subject'] ?>
                                <div class="float-right">
                                    <?php echo $m['date'] ?>
                                    <?php 
                                        if ($m['status'] == "open"){
                                    ?>
                                            <a href="<?php echo base_url() ?>message/status/open/<?php echo $m['id_message'] ?>">
                                            <h4><span class="label label-success">Open</span></h4></a>
                                            <a href="<?php echo base_url() ?>message/status/close/<?php echo $m['id_message'] ?>">
                                                <h4><span class="label label-default">Close</span></h4></a>          
                                    <?php
                                        }
                                        else if ($m['status'] == "close"){
                                    ?>
                                            <a href="<?php echo base_url() ?>message/status/open/<?php echo $m['id_message'] ?>">
                                            <h4><span class="label label-default">Open</span></h4></a>
                                            <a href="<?php echo base_url() ?>message/status/close/<?php echo $m['id_message'] ?>">
                                            <h4><span class="label label-danger">Close</span></h4></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </h4>
                              
							<?php echo $m['message'] ?>
                            <?php 
                              endforeach 
                            ?>
						  </div>
						  <div class="clearfix"> </div>
						</div>
					</div>
                    
                    <!-- comment -->
                    <?php
                        foreach($reply as $m): 
                    ?>
                    <div class="bs-example5 example_6" data-example-id="media-list">
						<ul class="media-list">
						  <li class="media">
                            <div class="media-body">
							  <!-- Nested media object -->
							  <div class="media">
                                  <!-- Nested media object -->
								  <div class="media">
									<div class="media-body">
									  <h4 class="media-heading">
                                          RE : <?php echo $m['subject'] ?> - <?php echo $m['nama'] ?>
                                          <div class="float-right">
                                              <?php echo $m['created'] ?>
                                          </div>
                                        </h4>
									  <?php echo $m['comment'] ?>
									</div>
								  </div>
								</div>
							  </div>
						  </li>
						</ul>
					</div>
                    <?php 
                      endforeach 
                    ?>
                    
                    <!-- Give comment -->
                    <?php
                        foreach($one_message_admin as $m): 
                        if($m['status'] == "open"){
                    ?>
                        <div class="Compose-Message">               
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Comment 
                                </div>
                                <div class="panel-body panel-body-com-m">
                                    <?php echo form_open(base_url().'message/comment/'.$m['id_message'])?>
                                        <hr>
                                            <label>Comment : </label>
                                            <textarea name="comment" rows="6" class="form-control1 control2"></textarea>
                                        <hr>
                                        <input type="submit" value="Comment">
                                    <?php echo form_close() ?>
                                </div>
                             </div>
                          </div>
						<div class="clearfix"> </div>
                    <?php 
                        }
                        else if($m['status'] == "close"){
                    ?>
                        <div class="alert alert-danger" role="alert"><center>Message was closed</center></div>
                    <?php
                        }
                        endforeach 
                    ?>
                </div>
            </div>

        </div>
    </section>