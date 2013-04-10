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
			<div class="span3">
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
			<div class="span9">
				<form id="form_del_all" method="post" class="form_del_all" action="<?php echo base_url();?>data/delete" >
				<table id="datatables" class="table table-bordered table-condensed">
					<thead class="">
						<tr>
							
							<th>ID</th>
							<th>Date</th>
							<th>Name</th>
							<th>Amount</th>
							<th>Actions</th>
							<th><!-- <button type="submit" class="del_all btn btn-danger btn-mini"><icon class="icon-remove"></icon> All</button>&nbsp; --><input type="checkbox" id="selectallcheck" name="allcheck"/> </th>
						</tr>
					</thead>

					<tbody class="">
						<tr>
	                    	<td colspan="6" class="dataTables_empty">Loading data...</td>
	                    	
	                  	</tr>
					</tbody>
				</table>
			</form>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4">
				<div class='btn-group'><button class='edit btn btn-mini btn-success' id=""><icon class='icon-pencil'></icon></button><button class='delete btn btn-mini btn-danger'id=""><icon class='icon-remove'></icon></button><button class='detail btn btn-mini btn-primary' id=""><icon class='icon-cog'></icon></button></div>
				<div class="btn-group">
					<button class="btn btn-success btn-mini label dropdown-toggle" data-toggle="dropdown" href="#"><icon class="icon-cog"></icon> <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#" id="10" class="ajaxedit"><icon class="icon-refresh"></icon> Edit</a></li>
						<li><a href="#" id="10" class="ajaxdelete"><icon class="icon-remove"></icon> Remove</a></li>
						
					</ul>
				</div>
			</div>
			<div class="span4">

				
				<button class="ajax btn btn-success" id="10">Ajax Test</button>
			</div>
			<div class="span4">
				
			</div>
		</div>
	</div>

<?php $this->load->view('main/footer');?>
<script>
	$(document).ready(function(){
		//declare all html button as jqery button
		$("button").button();

		oTable=$('#datatables').dataTable({
			"sAjaxSource":"<?php echo base_url();?>ajax/getdatatables",
			"sScrollY": "300px",
			"sServerMethod": "POST",
			"bServerSide": true,
    		"bJQueryUI": true,
    		"sPaginationType": "full_numbers",
    		"bAutoWidth": false,
    		"bDeferRender": true,
    		"aoColumns": [
    			
		        { "sClass": "id","sName": "id","sWidth": "30px", "aTargets": [0], },
		        { "sClass": "date","sName": "date", "sWidth": "80px", "aTargets": [ 1 ] },
		        { "sClass": "name","sName": "name", "aTargets": [ 2 ] },
	            { "sClass": "amount","sName": "amount", "sWidth": "120px", "aTargets": [ 3 ] },
	            { "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "100px","mData": 0,
		        	"mDataProp": function(data, type, full) {
          			return "<div class='btn-group'><button class='edit btn btn-mini btn-success' id='"+data[0]+"'><icon class='icon-pencil'></icon></button><button class='delete btn btn-mini btn-danger'id='"+data[0]+"'><icon class='icon-remove'></icon></button><button class='detail btn btn-mini btn-primary' id='"+data[0]+"'><icon class='icon-cog'></icon></button></div>";
        		}},
        		{ "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "60px",
		        	"mDataProp": function(data, type, full) {
          			return "<input class=\" btn btn-danger btn-mini\" value='"+ data[0]+"' type='checkbox' id='id['"+ data[0] +"]' name='del_all' />";
        		}}
	        ],
		});

		function save(id){
			var dataform={
				id:$('#id').val(),
				name:$('#name').val(),
				date:$('#date').val(),
				amount:$('#amount').val(),
				ajax:1
			};
			$(this).ready(function(){
				$.ajax({
					url:"<?php echo base_url();?>ajax/submit",
					data:dataform,
					type:"POST",
					success:function(){
						$('button#save').fadeIn(200);
                 		$('button#save_edit').hide(200);
                 		
                 		oTable.fnClearTable( 0 );
                  		oTable.fnDraw();

                 		$('#date').val('<?php echo date('Y-m-d'); ?>');
		                $('#id').val('');
		                $('#name').val('');
		                $('#amount').val('');
		                $('#name').focus();

		               
					}
				});
			});
		}
		$("#addnew form").submit(function(e){	
			e.preventDefault();
			save(0);
		});
		
		$("button#save").live("click",function(e){
			e.preventDefault();
			save(0);
		});
		
		$("button#save_edit").live("click",function(e){
		
			e.preventDefault();
				var id=$(this).attr("id");
				save(id);
			
		});		

		$('button.edit').live("click",function(e){
			e.preventDefault();
			var id=$(this).attr("id");
			$(this).ready(function(){
					$.ajax({
						url:"<?php echo base_url();?>ajax/get/"+id,
						type:"get",
						dataType:"json",
						success:function(data){
							$('#amount').val(data.amount);
							$('#name').val(data.name);
							$('#date').val(data.date);
							$('#id').val(data.id);
							$('button#save').hide(200);
							$('button#save_edit').fadeIn(200);
							
							oTable.fnClearTable( 0 );
                  			oTable.fnDraw();
						}
					});
			});
			
		});


		$("button.delete").live("click",function(e){
			e.preventDefault();
				id:$(this).attr("id");
				var del_data={
					id:$(this).attr("id"),
					ajax:1
				}
				if(confirm('Are You Sure?')){
					$(this).ready(function(){
							
						$.ajax({
							url: "<?php echo base_url()?>ajax/delete/",
							type: 'POST',
							data: del_data,
							success:function(msg){
								oTable.fnDraw(true);
							}
						});
					});
				}
		});


	});
</script>
</body>
</html>