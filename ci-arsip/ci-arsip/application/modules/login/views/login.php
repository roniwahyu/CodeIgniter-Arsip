<?php $this->load->view('main/header'); ?>

<div class="container login">
	<div class="row">
		<div class="span12">
			<br/>
		</div>
	</div>
	<div class="row">
		<?php 
			echo form_open('login/signin',array('id'=>'form','name'=>'loginform','class'=>'well login-form rounded'));
			echo form_fieldset('Login');
		?>
		
		<?php
			if($this->session->flashdata('message')):
				echo '<div class="alert alert-info alert-login">';
				echo '<p class="error">'.$this->session->flashdata('message').'</p>';
				echo '</div>';
			endif;
		?>
		<div class="span3">
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
						<span class="add-on"><icon class="icon-lock icon-cream"></icon></span>
						</span><input name="password" id="password" maxlength="100" type="password" data-icon="p" value="Password" onclick="if(this.value=='Password'){this.value=''}" onblur="if(this.value==''){this.value='Password'}">
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls ">
					<?php echo form_submit('sent','Masuk','class="btn btn-primary"');?>
					
				</div>
			</div>
		</div>
		<?php
			echo form_fieldset_close(); 
			echo form_close();
		?>	
	</div>
</div>

<?php $this->load->view('main/footer'); ?>


