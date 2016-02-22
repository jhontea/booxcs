<?php
    $msg = $this->session->flashdata('msg');
    if(!empty($msg)) {
        if($msg == "delete"){
?>
<div class="alert alert-danger" role="alert"><center>Member telah dihapus</center></div>
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
                    
                    <h3 class="blank1">View User</h3>
					
                    <div class="xs">
						<div class="col-md-8 inbox_right">
							<form action="#" method="POST">
								<div class="input-group input-group-ind">
									<input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit"><i class="fa fa-search icon-ser"></i></button>
									</span>
								</div><!-- Input Group -->
							</form>
							<div class="mailbox-content">
								<table class="table table-fhr">
									<tbody>
                                    <tr>
                                        <td>No</td>    
                                        <td>Username</td>    
                                        <td>Nama</td>    
                                        <td>Email</td>    
                                    </tr>
                                    <?php 
                                      $num = 1;
                                      foreach($member as $m): 
                                    ?>
                                    <tr>
                                        <td><?php echo $num ?></td>
                                        <td><?php echo $m['username'] ?></td>
                                        <td><?php echo $m['nama'] ?></td>
                                        <td><?php echo $m['email'] ?></td>
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