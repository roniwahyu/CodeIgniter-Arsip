<?php $this->load->view('main/header');?>
       <div class="container-fluid">
        <div class="row-fluid">
            <div id="" class="brand span12">
                    <h1 class="">arsip Management</h1>
            </div>
        </div>

        <div class="row-fluid">

            <div class="span3">
                <div id="form_input" class="">
                <?php if(!empty($arsip)){ echo var_dump($arsip);}?>
                <?php echo form_open('arsip/submit',array('id'=>'addform','class'=>'form form-vertical')); ?>
                    
                    <input type="hidden" value='' id="file_id" name="file_id">
                    
                    <div class="control-group">
                            <?php echo form_label('file_name : ','file_name',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('file_name','','id="file_name"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('file_type : ','file_type',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('file_type','','id="file_type"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('file_size : ','file_size',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('file_size','','id="file_size"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('file_url : ','file_url',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('file_url','','id="file_url"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('file_group : ','file_group',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('file_group','','id="file_group"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('datetime : ','datetime',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('datetime','','id="datetime"'); ?>
                            </div>
                    </div>
                    
                    <button id="save" type="submit" class="btn btn-success"><icon class="icon-plus-sign"></icon> Add New</button>
                    <button id="save_edit" type="submit" class="btn btn-primary" style="display:none;"><icon class="icon-refresh"></icon> Update</button>

                    <?php echo form_close();?>
                 </div>
            </div>
            <div class="span9">

                <form id="form_del_all" method="post" class="form_del_all" action="<?php echo base_url();?>data/delete" >
                <table id="datatables" class="table table-condensed table-striped">
                    <thead class="">
                        <tr>
                                        <th>file_id</th>
                                        <th>file_name</th>
                                        <th>file_type</th>
                                        <th>file_size</th>
                                        <th>file_url</th>
                                        <th>file_group</th>
                                       
                                        <th>Actions</th>
                                    </tr>
                    </thead>

                    <tbody class="table-bordered">
                        <tr>
                            <td colspan="6" class="dataTables_empty">Loading data...</td>
                            
                        </tr>
                    </tbody>
                </table>
            </form>
            </div>
        </div>
        
    </div>

<?php $this->load->view('main/footer');?>
<script>
    $(document).ready(function(){
      $( "#myModal" ).dialog({
      autoOpen: true,
      /*height: 300,
      width: 960,*/
      modal: true,
     /* hide: 'Slide',
      open: function(event, ui){$('body').css('overflow','hidden');$('.ui-widget-overlay').css('width','100%'); },
    close: function(event, ui){$('body').css('overflow','auto'); } */
  });

        $('#datatables a.showmodal').live("click",function(e) {
                        e.preventDefault();
                        var url = $(this).attr('href');
                        if (url.indexOf('#') == 0) {
                            $(url).modal('open');
                        } else {
                            $.get(url, function(data) {
                                $('<div class="span12"><div id="myModal" class="modal hide fade" style="overflow:hidden"><div class="modal-header"><h3 id="myModalLabel">Modal Heading</h3></div><div class="modal-body"><p>' + data + '</p></div><div class="modal-footer"><button data-dismiss="modal" class="btn">Close</button><button class="btn btn-primary">Save changes</button></div></div></div>').modal();
                            }).success(function() { $('input:text:visible:first').focus(); });
                        }
                    });
        $('[data-toggle="normalmodal"]').click(function(e) {
                        e.preventDefault();
                        var url = $(this).attr('href');
                        if (url.indexOf('#') == 0) {
                            $(url).modal('open');
                        } else {
                            $.get(url, function(data) {
                                $('<div class="span12"><div id="myModal" class="modal hide fade" style="overflow:hidden"><div class="modal-header"><h3 id="myModalLabel">Modal Heading</h3></div><div class="modal-body"><p>' + data + '</p></div><div class="modal-footer"><button data-dismiss="modal" class="btn">Close</button><button class="btn btn-primary">Save changes</button></div></div></div>').modal();
                            }).success(function() { $('input:text:visible:first').focus(); });
                        }
                    });
        $("#date").datepicker({
                    dateFormat: 'yy-mm-dd',
                });
        //declare all html button as jqery button
        $("button").button();

        oTable=$('#datatables').dataTable({
            "sAjaxSource":"<?php echo base_url();?>arsip/getdatatables",
            "sScrollY": "300px",
            "sServerMethod": "POST",
            "bServerSide": true,
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "bAutoWidth": false,
            "bDeferRender": true,
            "bSortClasses": false,
            "bScrollCollapse": true,    
            "bStateSave": true,
            "aoColumns": [
                
                { "sClass": "file_id","sName": "file_id","sWidth": "50px", "aTargets": [0] } ,
                { "sClass": "file_name", "sName": "file_name", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "file_type", "sName": "file_type", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "file_size", "sName": "file_size", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "file_url", "sName": "file_url", "sWidth": "80px", "aTargets": [ 1 ] },
                { "sClass": "file_group", "sName": "file_group", "sWidth": "80px", "aTargets": [ 1 ] },
                
                { "sClass": "center", "bSortable": false, "bSearchable": false, "sWidth": "100px","mData": 0,
                    "mDataProp": function(data, type, full) {
                    return "<div class='btn-group'><button class='edit btn btn-mini btn-success' id='"+data[0]+"'><icon class='icon-pencil'></icon></button><a href='<?php echo BASE_URL();?>uploads/cms/"+data[1]+"' class='showmodal btn btn-mini' data-toggle=\"normalmodal\" ><icon class='icon-eye-open'></icon></a></div>";
                }},
              
            ],
        });

        function save(file_id){
            var dataform={
                file_id:$('#file_id').val(),
                file_name:$('#file_name').val(),
                file_type:$('#file_type').val(),
                file_size:$('#file_size').val(),
                file_url:$('#file_url').val(),
                file_group:$('#file_group').val(),
               
                ajax:1
            };
            $(this).ready(function(){
                $.ajax({
                    url:"<?php echo base_url();?>arsip/submit",
                    data:dataform,
                    type:"POST",
                    success:function(){
                        $('button#save').fadeIn(200);
                        $('button#save_edit').hide(200);
                        
                        oTable.fnClearTable( 0 );
                        oTable.fnDraw();

                       
                        $('#file_id').val(''); 
                        $('#file_name').val('');
                        $('#file_type').val('');
                        $('#file_size').val('');
                        $('#file_url').val('');
                        $('#file_group').val('');
                        $('#datetime').val('');
                       
                       // $('#name').focus();

                       
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
                        url:"<?php echo base_url();?>arsip/get/"+id,
                        type:"get",
                        dataType:"json",
                        success:function(data){
                            $('#file_name').val(data.file_name);
                            $('#file_type').val(data.file_type);
                            $('#file_size').val(data.file_size);
                            $('#file_url').val(data.file_url);
                            $('#file_group').val(data.file_group);
                            $('#datetime').val(data.datetime);
                            $('#file_id').val(data.file_id);

                            $('button#save').hide(200);
                            $('button#save_edit').fadeIn(200);
                            
                            oTable.fnClearTable( 0 );
                            oTable.fnDraw();
                        }
                    });
            });
            
        });


        


        
    });
</script>
</body>
</html>