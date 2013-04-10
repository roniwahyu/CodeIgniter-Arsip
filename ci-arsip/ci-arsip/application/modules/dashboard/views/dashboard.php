<?php $this->load->view('main/header');?>
<?php
$usernm=$this->session->userdata['username'];

?>
<!-- main content -->
            <!-- Start Content -->
	<div class="container">

		<?php
			/*if(!empty($main_view)):
				$this->load->view($main_view);
			endif;*/
		?>
		<?php
			if(!empty($content)):
				$this->load->view($content);
			else:
				$this->load->view('template_view');

				?>
		<div class="row">
			<div class="span12">
				<ul class="thumbnails">
				    <li class="span3 tile tile-double tile-orange">
				        <a href="#" >
				            <h1 class="tile-text">Admin</h1>
				        </a>
				    </li> <li class="span3 tile tile-double">
				        <a href="#" >
				            <h1 class="tile-text">Admin</h1>
				        </a>
				    </li>
				    <li class="span3 tile tile-teal">
				        <a href="<?php echo base_url();?>admin/users" >
				            <h1><icon class="icon-user"></icon>User Admin</h1>
				            <h5>User Role</h5>
				        </a>
				    </li>
					<li class="span3 tile tile-yellow">
				        <a href="<?php echo base_url();?>admin/role_user" >
				            <h1><icon class="icon-user"></icon>Role Admin</h1>
				            <h5>User Role</h5>
				        </a>
				    </li>
				
				  
				    </li><li class="tile tile-double tile-red ">
				        <a href="<?php echo base_url();?>logout" >
				            <h1><icon class="icon-off"></icon>Logout</h1>
				            <h5>Keluar System</h5>
				        </a>
				    </li>
				</ul>
			</div>
		</div>
			
			<hr>
			<?php 
			endif;
		?>
		
	
	
	</div>
	<!-- End Content  -->

            
<?php $this->load->view('main/footer');?>
