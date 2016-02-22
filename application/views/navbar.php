<body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
        <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?php echo base_url() ?>"><span>-</span> Dashboard <span>-</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?php echo base_url() ?>"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="menu-list"><a href="<?php echo base_url() ?>message"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
                            
                            <?php if($this->session->userdata('level')=="member") { ?>
							<ul class="sub-menu-list">
								<li><a href="<?php echo base_url() ?>message">Message</a> </li>
								<li><a href="<?php echo base_url() ?>message/compose">Compose Message</a></li>
							</ul>
                            <?php } ?>
                            
                            <?php if($this->session->userdata('level')=="admin") { ?>
							<ul class="sub-menu-list">
								<li><a href="<?php echo base_url() ?>message">Message</a> </li>
							</ul>
                            <?php } ?>
                            
						</li>
                        <li><a href="<?php echo base_url().'user/profile/'?>"><i class="lnr lnr-user"></i><span>Profile</span></a></li>
                        <li><a href="<?php echo base_url().'c_login/logout' ?>"><i class="lnr lnr-power-switch"></i><span>Logout</span></a></li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content main-content2 main-content2copy">
			