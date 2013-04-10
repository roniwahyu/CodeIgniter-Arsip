<?php $this->load->view('main/header');?>
	<div class="navbar">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container" style="width: auto;">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">Ajax Test</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#"><icon class='icon-home'></icon></a></li>
							
							
						</ul>
						
						<ul class="nav pull-right">
							<li><a href="#">Link</a></li>
							<li class="divider-vertical"></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div>
		</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span4"><div class="btn-group">
				<a class="btn btn-success btn-mini label dropdown-toggle" data-toggle="dropdown" href="#"><icon class="icon-cog"></icon> <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</div>
				<button class="ajax btn btn-success" id="10">Ajax Test</button>
			</div>
			<div class="span6">
				<div id="form_input" class="">
				<?php if(!empty($daily)){ echo var_dump($daily);}?>
				<?php echo form_open('ajax/submit',array('id'=>'addform','class'=>'form')); ?>
				<table>
			        
			    		<input type="hidden" value='' id="id" name="id">
			        <tr >
			            <td> <?php echo form_label('Date : '); ?></td>
			            <td> <?php echo form_input('date',date('Y-m-d'),'id="date"'); ?></td>
			        </tr>
			        <tr>
			            <td> <?php echo form_label('Name : ');?> </td>
			            <td> <?php echo form_input('name',isset($daily['name']),'id="name"'); ?></td>
			        </tr>
			        <tr>
			            <td> <?php echo form_label('Amount : ');?> </td>
			            <td> <?php echo form_input('amount','','id="amount"'); ?></td>
			        </tr>

			        
			      </table>
			      	<button id="save" type="submit" class="btn btn-success"><icon class="icon-check"></icon> Add</button>
			      	<button id="save_edit" type="submit" class="btn btn-primary" style="display:none;"><icon class="icon-refresh"></icon> Update</button>

			      	<?php echo form_close();?>
			     </div>
			</div>
		</div>
	</div>

<?php $this->load->view('main/footer');?>
<script>
	$(document).ready(function(){
		//declare all html button as jqery button
		$("button").button();

		$('button.ajax').live("click",function(e){
			e.preventDefault();
			var id=$(this).attr("id");
			$(this).ready(function(){
				
				

				alert('oke'+id);
					$.ajax({
						url:"<?php echo base_url();?>ajax/get/"+id,
						dataType:"json",
					//	data    : "id="+id+"&name="+name+"&date="+date+"&amount="+amount,
						//data:data,
						success:function(data){
						/*	$('.span4').fadeIn(200).html('<p>' + data.name + '</p><p>' + data.amount 
	                                                           + '</p>');*/
							//$('span4').html(data[0]);
							$('#amount').val(data.amount);
							$('#name').val(data.name);
							$('#date').val(data.date);
						}
					});
				/*$.getJSON('<?php echo base_url();?>ajax/get/'+id,function(data){
					$('.span4').fadeIn(200).html('<p>' + data.name + '</p><p>' + data.amount 
	                                                           + '</p>');
				$('#amount').val(data.amount);
				$('#name').val(data.name);
				$('#date').val(data.date);
				});*/
			});
			

		});

	});
</script>
</body>
</html>