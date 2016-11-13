@extends('layouts.dashboard')

@section('content')
 <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Customer Details
         
        </h1>
      </section> <hr>

      
         <div class="col-md-3 col-md-offset-4 col-xs-6">
             <div class="box box-danger">
            
                  <div class="box-body">
                   
                   <form action="/storeCustomer" method="POST" id="store_customer">

                        <div class="form-group">
                          <label>PLDT Accout Number</label>
                          <input required="required" required="required" class="form-control" id="account_number" name="account_number" type="text">
                        </div>

                        <div class="form-group">
                          <label>Landline</label>
                          <input required="required" class="form-control" id="Landline" name="Landline" type="text">
                        </div>

                        <div class="form-group">
                          <label>Last Name</label>
                          <input required="required" class="form-control" id="last_name" name="last_name" type="text">
                        </div>

                        <div class="form-group">
                          <label>First Name</label>
                          <input required="required" class="form-control" id="first_name" name="first_name" type="text">
                        </div>

                        <div class="form-group">
                          <label>Birhtday</label>
                          <input required="required" class="form-control" id="birhtday" name="birhtday" type="text">
                        </div>

                       <div class="form-group">
                          <label>Email</label>
                          <input required="required" class="form-control" id="email" name="email" type="email">
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn btn-success btn-lg">Submit</button>
                           <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                        </div>

                  </form>

                    
                 </div>
                 <!-- /.box-body -->
             </div>
          </div>

         <!--   <div class="col-lg-6 col-xs-6">
             <div class="box box-danger">
                
                  <div class="box-body">
                    <p> Local Storage </p>
                    <p class="local_storage"></p>
                  </div>
              </div>
          </div> -->

        
       </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->  
  
@stop  
@section('js')

    <script type="text/javascript">
      
       $('#store_customer').submit(function(e) {
         e.preventDefault();
         localStorage.setItem('customer', JSON.stringify($(this).serialize()) );

         $('.local_storage').html(JSON.parse(localStorage.getItem('customer')));
        
       });
       
       $('.local_storage').html(JSON.parse(localStorage.getItem('customer')));
       
    </script>



@stop
      

         