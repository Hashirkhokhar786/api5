<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet"type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
       

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ADD SHIPMENT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
<!--       <li class="nav-item active">
        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
      </li>-->
   
    </ul>
<!--    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>-->
</nav>
    
<div class="container">
<div id="userModal" class="modal fade"> 
<div class="jumbotron"> 
    
    <div class="col-md-6" align="right">
                        <button type="button" id="add_button" class="btn btn-info btn-xs">Add</button>
                    </div>
    
    <h3><i>SHIPMENT DATA</i></h3>
     <span id="success_message"></span>
    <form id="user_form">
<div class="form-group row">
  <div class="col-md-4">  
  <label for="peice_id">Peice Id</label>
  <input type="text" class="form-control" id="peice_id">
   <span id="first_name_error" class="text-danger"></span>
  </div>
</div>
 
    
<div class="form-group row">
    <div class="col-md-4">
  <label for="shipment_id">Shipment ID</label>
  <input type="text" class="form-control" id="shipment_id">
   <span id="shipment_iderror" class="text-danger"></span>
    
    </div>
</div>  
   
<div class="form-group row">
    <div class="col-md-4">
  <label for="pick_up_pin">Pick Up Pin</label>
  <input type="text" class="form-control" id="pick_up_pin">
   <span id="pick_up_pin_error" class="text-danger"></span>
    </div>
</div>     
    
<div class="form-group row">
    <div class="col-md-4">
  <label for="email">Email</label>
  <input type="text" class="form-control" id="email">
   <span id="email_error" class="text-danger"></span>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
  <label for="sms">Sms</label>
  <input type="text" class="form-control" id="sms">
   <span id="sms_error" class="text-danger"></span>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
  <label for="shipment_type">Shipment Type</label>
  <input type="text" class="form-control" id="shipment_type">
   <span id="shipment_type_error" class="text-danger"></span>
    </div>
</div> 
    
<div class="form-group row">
    <div class="col-md-4">
  <label for="alloc_type">Allocation Type</label>
  <input type="text" class="form-control" id="alloc_type">
   <span id="alloc_type_error" class="text-danger"></span>
    </div>
</div>    

<div class="form-group row">
    <div class="col-md-4">
  <label for="width">Width</label>
  <input type="text" class="form-control" id="width">
   <span id="width_error" class="text-danger"></span>
    </div>
</div>    
    
<div class="form-group row">
    <div class="col-md-4">
  <label for="height">Height</label>
  <input type="text" class="form-control" id="height">
   <span id="height_error" class="text-danger"></span>
    </div>
</div>   
    
<div class="form-group row">
    <div class="col-md-4">
  <label for="depth">Depth</label>
  <input type="text" class="form-control" id="depth">
   <span id="depth_error" class="text-danger"></span>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
  <label for="show_pin">Show Pin</label>
  <input type="text" class="form-control" id="show_pin">
   <span id="show_pin_error" class="text-danger"></span>
    </div>
</div>
    
<div class="form-group row">
    <div class="col-md-4">
  <label for="expire_days">Expire Days</label>
  <input type="text" class="form-control" id="expire_days">
   <span id="expire_days_error" class="text-danger"></span>
    </div>
</div>

<div class="form-group row">
    <div class="col-md-4">
  <label for="customer_name">Customer Name</label>
  <input type="text" class="form-control" id="customer_name">
   <span id="customer_name_error" class="text-danger"></span>
    </div>
</div> 
    
    
       <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
       
         <div class="modal-footer">
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="data_action" id="data_action" value="Insert" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
    
 
    </form>
    </div>
</div>
</div>



<script type="text/javascript" language="javascript" >
    
       $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Add User");
        $('#action').val('Add');
        $('#data_action').val("Insert");
        $('#userModal').modal('show');
    });
    
    
    
    
 $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        $.ajax({
            url:"<?php echo base_url() . 'test_api/action' ?>",
            method:"POST",
            data:$(this).serialize(),
            dataType:"json",
            success:function(data)
            {
                if(data.success)
                {
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    //fetch_data();
                    if($('#data_action').val() == "Insert")
                    {
                        $('#success_message').html('<div class="alert alert-success">Data Inserted</div>');
                    }
                }

                if(data.error)
                {
                    $('#first_name_error').html(data.first_name_error);
                    $('#peice_id_error').html(data.last_name_error);
                     $('#shipment_id_error').html(data.last_name_error);
                      $('#pick_up_pin__error').html(data.last_name_error);
                       $('#email_error').html(data.last_name_error);
                        $('#sms_error').html(data.last_name_error);
                         $('#shipment_type_error').html(data.last_name_error);
                          $('#alloc_type_error').html(data.last_name_error);
                           $('#width_error').html(data.last_name_error);
                            $('#height_error').html(data.last_name_error);
                             $('#depth_error').html(data.last_name_error);
                              $('#show_pin_error').html(data.last_name_error);
                               $('#expire_days_error').html(data.last_name_error);
                                $('#customer_name_error').html(data.last_name_error);
                    
                    
                }
            }
        })
    });

    
</script>




</body>
</html>

