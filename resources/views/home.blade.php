@extends('layouts.main')

@section('content')
 <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          PLDT  - Better Customer Experience
          <small>v 1.0</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
       <div class="row">
          <hr>

              <a href="/billings">
                 <div class="col-lg-4 col-xs-6">
                   <div class="info-box bg-blue">
                      <span class="info-box-icon"><i class="fa fa-dollar"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-number">Billing Concerns</span>
                            <span class="progress-description">
                              Outstanding Balance / Reports
                            </span>
                      </div>
                    </div>
                </div>
               </a>    

               <a href="repair">
                 <div class="col-lg-4 col-xs-6">
                   <div class="info-box bg-green">
                      <span class="info-box-icon"><i class="fa fa-wrench"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-number">Repair</span>
                            <span class="progress-description">
                              Broadband & Landline
                            </span>
                      </div>
                    </div>
                </div>
               </a>     


               <a href="inquiries">
                 <div class="col-lg-4 col-xs-6">
                   <div class="info-box bg-yellow">
                      <span class="info-box-icon"><i class="fa fa-info"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-number">Other Inquiries</span>
                            <span class="progress-description">
                              Product Service Information
                            </span>
                      </div>
                    </div>
                </div>
               </a>   


       </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
    
@stop  
      

         