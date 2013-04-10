<?php $this->load->view('main/header');?>
       <div class="container-fluid">
        <div class="row-fluid">
            <div id="" class="brand span12">
                    <h1 class="">users Management</h1>
            </div>
            <div class="span3">
                <div id="form_input" class="">
                <?php if(!empty($users)){ echo var_dump($users);}?>
                <?php echo form_open('users/submit',array('id'=>'addform','class'=>'form form-vertical')); ?>
                    
                    <input type="hidden" value='' id="userid" name="userid">
                    
                    <div class="control-group">
                            <?php echo form_label('username : ','username',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('username','','id="username"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('password : ','password',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('password','','id="password"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('firstname : ','firstname',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('firstname','','id="firstname"'); ?>
                            </div>
                    </div>
                    
                   <div class="control-group">
                            <?php echo form_label('lastname : ','lastname',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('lastname','','id="lastname"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('phone : ','phone',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('phone','','id="phone"'); ?>
                            </div>
                    </div>
                    
                    <div class="control-group">
                            <?php echo form_label('email : ','email',array('class'=>'control-label')); ?>
                            <div class="controls">
                                <?php echo form_input('email','','id="email"'); ?>
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
                                        <th>userid</th>
                                        <th>username</th>
                                       
                                        <th>firstname</th>
                                     
                                        <th>lastname</th>
                                        <th>phone</th>
                                        <th>email</th>
                                   
                                        <th>Actions</th><th><input type="checkbox" id="selectallcheck" name="allcheck"/> </th>
                                    </tr>
                    </thead>

                    <tbody class="table-bordered">
                        <tr>
                            <td colspan="14" class="dataTables_empty">Loading data...</td>
                            
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
        $("#date").datepicker({
                    dateFormat: 'yy-mm-dd',
                });
         $('#selectallcheck').click (function () {
             var checkedStatus = this.checked;
            $('#datatables tbody tr').find('td:last :checkbox').each(function () {
                $(this).prop('checked', checkedStatus);
             });
        });
        //declare all html button as jqery button
        $("button").button();

        oTable=$('#datatables').dataTable({
            "sAjaxSource":"<?php echo base_url();?>users/getdatatables",
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
                
                { "sClass": "userid", "mData": 0 } ,
                { "sClass": "username", "mData": 1 },
                { "sClass": "firstname", "mData": 1 },
               
                { "sClass": "lastname", "mData": 1 },
                { "sClass": "phone", "mData": 1 },
                { "sClass": "email", "mData": 1 },
               
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

        function save(userid){
            var dataform={
                userid:$('#userid').val(),
                username:$('#username').val(),
                password:$('#password').val(),
                firstname:$('#firstname').val(),
                midname:$('#midname').val(),
                lastname:$('#lastname').val(),
                phone:$('#phone').val(),
                email:$('#email').val(),
                address:$('#address').val(),
                address2:$('#address2').val(),
                city:$('#city').val(),
                province:$('#province').val(),
                postal:$('#postal').val(),
                country:$('#country').val(),
                birthdate:$('#birthdate').val(),
                userlevel:$('#userlevel').val(),
                marital:$('#marital').val(),
                isactive:$('#isactive').val(),
                photo:$('#photo').val(),
                timestamp:$('#timestamp').val(),
                ajax:1
            };
            $(this).ready(function(){
                $.ajax({
                    url:"<?php echo base_url();?>users/submit",
                    data:dataform,
                    type:"POST",
                    success:function(){
                        $('button#save').fadeIn(200);
                        $('button#save_edit').hide(200);
                        
                        oTable.fnClearTable( 0 );
                        oTable.fnDraw();

                       
                        $('#userid').val(''); 
                        $('#username').val('');
                        $('#password').val('');
                        $('#firstname').val('');
                        $('#midname').val('');
                        $('#lastname').val('');
                        $('#phone').val('');
                        $('#email').val('');
                        $('#address').val('');
                        $('#address2').val('');
                        $('#city').val('');
                        $('#province').val('');
                        $('#postal').val('');
                        $('#country').val('');
                        $('#birthdate').val('');
                        $('#userlevel').val('');
                        $('#marital').val('');
                        $('#isactive').val('');
                        $('#photo').val('');
                        $('#timestamp').val('');
                       
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
                        url:"<?php echo base_url();?>users/get/"+id,
                        type:"get",
                        dataType:"json",
                        success:function(data){
                            $('#username').val(data.username);
                            $('#password').val(data.password);
                            $('#firstname').val(data.firstname);
                            $('#midname').val(data.midname);
                            $('#lastname').val(data.lastname);
                            $('#phone').val(data.phone);
                            $('#email').val(data.email);
                            $('#address').val(data.address);
                            $('#address2').val(data.address2);
                            $('#city').val(data.city);
                            $('#province').val(data.province);
                            $('#postal').val(data.postal);
                            $('#country').val(data.country);
                            $('#birthdate').val(data.birthdate);
                            $('#userlevel').val(data.userlevel);
                            $('#marital').val(data.marital);
                            $('#isactive').val(data.isactive);
                            $('#photo').val(data.photo);
                            $('#timestamp').val(data.timestamp);
                            $('#userid').val(data.userid);

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
                var del_data={
                    id:$(this).attr("id"),
                    ajax:1
                }
                if(confirm('Are You Sure?')){
                    $(this).ready(function(){
                            
                        $.ajax({
                            url: "<?php echo base_url()?>users/delete/",
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