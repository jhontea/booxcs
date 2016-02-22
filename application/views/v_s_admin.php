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
                    
                    <h3 class="blank1">Message</h3>
					
                    <div class="xs">
						<div class="col-md-8 inbox_right">
							 <?php echo form_open("message/search"); ?>
								<div class="input-group input-group-ind">
									<input name="search" type="text" name="search" class="form-control1 input-search" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit"><i class="fa fa-search icon-ser"></i></button>
									</span>
								</div><!-- Input Group -->
							<?php echo form_close(); ?>
							<div class="mailbox-content">
								<table class="table table-fhr">
									<tbody>
                                    <tr>
                                        <td>No</td>    
                                        <td>Subject</td>    
                                        <td>Message</td>    
                                        <td>User</td>    
                                        <td>Date</td>    
                                        <td>Status</td>     
                                    </tr>
                                    <?php 
                                      $num = 1;
                                      foreach($message_search_admin as $m): 
                                    ?>
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><a href="<?php echo base_url() ?>message/view/<?php echo $m['id_message'] ?>"><?php echo $m['subject'] ?></a></td>
                                        <td><a href="<?php echo base_url() ?>message/view/<?php echo $m['id_message'] ?>"><?php echo $m['message'] ?></a></td>
                                        <td><?php echo $m['nama'] ?></td>
                                        <td><?php echo $m['date'] ?></td>
                                        <td>
                                            <?php 
                                                if ($m['status'] == "open"){
                                                    echo '<h4><span class="label label-success">Open</span></h4>';
                                                }
                                                else if ($m['status'] == "close"){
                                                    echo '<h4><span class="label label-danger">Close</span></h4>';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php if($m['unread'] == 1){ ?>
                                            <i class="fa fa-circle"></i>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php 
                                      $num++;
                                      endforeach 
                                    ?>
								    </tbody>
								</table>
							   </div>
						</div>
						<div class="clearfix"> </div>
					</div>
                    
                </div>
            </div>

        </div>
    </section>