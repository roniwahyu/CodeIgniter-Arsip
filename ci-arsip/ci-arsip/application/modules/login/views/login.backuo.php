<?php $this->load->view('main/header'); ?>

<!-- Login Box -->
	<div class="containter">
		<div class="row">
			<div class="span4">
		<?php 
			echo form_open('login/signin',array('id'=>'form','name'=>'loginform','class'=>'well login-form rounded'));
		?>
					<legend><icon class="icon-circles"></icon>Login<icon class="icon-circles-reverse"></icon></legend>
		<?php
			if($this->session->flashdata('message')):
					echo '<div class="alert alert-info alert-login">';
					echo '<p class="error">'.$this->session->flashdata('message').'</p>';
					echo '</div>';
			endif;

		?>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Username</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><icon class="icon-user icon-cream"></icon></span>
						<input class="input" name="username" type="text" id="username" value="Username" data-icon="u" placeholder="Username" onclick="if(this.value=='Username'){this.value=''}" onblur="if(this.value==''){this.value='Username'}"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><icon class="icon-password icon-cream"></icon></span>
						</span><input name="password" id="password" maxlength="100" type="password" data-icon="p" value="Password" onclick="if(this.value=='Password'){this.value=''}" onblur="if(this.value==''){this.value='Password'}">
					</div>
				</div>
			</div>
			<div class="control-group signin">
				<div class="controls ">
					<?php echo form_submit('sent','Masuk','class="btn btn-block pull-right"');?>
					<div class="clearfix">
						<span class="icon-forgot"></span><?php echo anchor('members/forgot_passwd','Lupa passwordnya','class="button-right"'); ?>
						<span class="icon-forgot"></span><?php echo anchor('members/add_user','Buat Akun')."";?>
						
					</div>
				</div>
			</div>
<?php
	echo form_fieldset_close(); 
	echo form_close();
?>


	</div>
	</div>
	</div>



<?php $this->load->view('main/footer'); ?>


