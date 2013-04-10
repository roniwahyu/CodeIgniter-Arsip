<?php $this->load->view('header');?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
        
        <div id="form_input" title="Input / Edit Data" >
      <table>
        <?php echo form_open('main/submit',array('id'=>'input','class' => 'form')); ?>
    <input type="text" value='' id="id" name="id">
        <tr >
            <td> <?php echo form_label('Date : '); ?></td>
            <td> <?php echo form_input('date',date('Y-m-d'),'id="date"'); ?></td>
        </tr>
        <tr>
            <td> <?php echo form_label('Name : ');?> </td>
            <td> <?php echo form_input('name','','id="name"'); ?></td>
        </tr>
        <tr>
            <td> <?php echo form_label('Amount : ');?> </td>
            <td> <?php echo form_input('amount','','id="amount"'); ?></td>
        </tr>

        
      </table>
    </div>
    <button id="save" class="btn btn-primary btn-normal"><icon class="icon-plus"></icon> Save</button></div> 

    <?php echo form_close();?>
  </div>
  <div class="span12">
    <button id="create-daily" class="btn btn-primary btn-normal"><icon class="icon-plus"></icon>  Create New</button></div> 
        <div id="productlist">
              <h2>Product List</h2>
              <table id="products" class="table table-condensed table-bordered table-stripped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>date</th>
                    <th>name</th>
                    <th>amount</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="4" class="dataTables_empty">Loading data...</td>
                  </tr>
                </tbody>
              </table>
            
            </div>
    </div>
  </div>
</div>
  <script>
  $(document).ready(function() {
    if (typeof oTable == 'undefined') {
      oTable =$('#products').dataTable( {
        "bJQueryUI":true,
        "bProcessing": false,
        "bServerSide": true,
        
        "sAjaxSource":"<?php echo base_url();?>main/get_datatables",
        "sServerMethod": "POST", 
         fnServerData: function(sAjaxSource, aoData, fnCallback){
                    $.ajax(
                          {
                            "dataType"  : "JSON",
                            "type"      : "POST",
                            "url"       : "<?php echo base_url();?>main/get_datatables",
                            "data"      : aoData,
                            "success"   : fnCallback
                          }
                      );
                  },
        
        //"iDisplayStart"  : 10,
        "bAutoWidth": false,
        "aoColumnDefs": [
            { "sName": "id", "aTargets": [ 0 ] },
            { "sName": "date", "sWidth": "80px", "aTargets": [ 1 ] },
            { "sName": "name", "sWidth": "100px", "aTargets": [ 2 ] },
            { "sName": "amount", "sWidth": "120px", "aTargets": [ 3 ] },
          ],           
      });
    }
    else
    {
      oTable.fnClearTable( 0 );
      oTable.fnDraw();
    }
} );
  </script>
  <script>
     /* $( "#form_input" ).dialog({
      autoOpen: true,
      height: 300,
      width: 350,
      modal: false,
      hide: 'Slide',
      buttons: {
        "Add": function() {
          var form_data = {
            id: $('#id').val(),
            date: $('#date').val(),
            name: $('#name').val(),
            amount: $('#amount').val(),
            ajax:1
            };
          
            $('#date').attr("disabled",true);
          $('#name').attr("disabled",true);
          $('#amount').attr("disabled",true);

          $.ajax({
          url : "<?php echo site_url('main/submit')?>",
          type : 'POST',
          data : form_data,
          success: function(msg){
              $('#show').html(msg),
              $('#date').val('<?php echo date('Y-m-d'); ?>'),
              $('#id').val(''),
              $('#name').val(''),
              $('#amount').val(''),
                $('#date').attr("disabled",false);
              $('#name').attr("disabled",false);
              $('#amount').attr("disabled",false);
              $( '#form_input' ).dialog( "close" )}

          });
          oTable.fnClearTable( 0 );
          oTable.fnDraw();
        
      },
        Cancel: function() {
          $('#id').val(''),
          $('#name').val('');
          $('#amount').val('');
          $( this ).dialog( "close" );
        }
      },
      close: function() {
        $('#id').val(''),
        $('#name').val('');
        $('#amount').val('');
      }
    });*/
    /*$( "#create-main" )
          .button()
          .click(function() {
            $( "#form_input" ).dialog( "open" );
          });
     */
    $( "#save" ).button().click(function(e) {
        e.preventDefault;
          var form_data = {
              id: $('#id').val(),
              date: $('#date').val(),
              name: $('#name').val(),
              amount: $('#amount').val(),
              ajax:1
              };
          
            $('#date').attr("disabled",true);
            $('#name').attr("disabled",true);
            $('#amount').attr("disabled",true);

          $.ajax({
              url : "<?php echo site_url('main/submit')?>",
              type : 'POST',
              data : form_data,
              success: function(msg){
                  $('#show').html(msg),
                  $('#date').val('<?php echo date('Y-m-d'); ?>'),
                  $('#id').val(''),
                  $('#name').val(''),
                  $('#amount').val(''),
                    $('#date').attr("disabled",false);
                  $('#name').attr("disabled",false);
                  $('#amount').attr("disabled",false);
                  $( '#form_input' ).dialog( "close" )
                  oTable.fnClearTable( 0 );
                  oTable.fnDraw();
                  }
          });
        
        });
   
  </script>
</body>
</html>