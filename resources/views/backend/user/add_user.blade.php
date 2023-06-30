@extends('admin.admin_master')
@section('admin')



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add User</h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form methd="post" action="{{ route('users.store') }}">
             <div class="row">
               <div class="col-12">
                
               
               <div class="row">


               <div class="col-6">
                
               <div class="form-group">
                       <h5>User Role <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="usertype" id="select" required="" class="form-control">
                               <option value="" selected="" disabled="">Select Role</option>
                               <option value="Admin">Admin</option>
                               <option value="User">User</option>
                           </select>
                       
                    </div><!-- End-controls-->
                   </div><!-- End-form-group-->

               </div><!-- End col-6-->

               <div class="col-6">
                
               <div class="form-group">
                       <h5>User Name<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" required="" > </div>
                       
                   </div>
                 

               </div><!-- End col-6-->
           

               </div> <!--End row -->





               <div class="row">


<div class="col-6">
 
<div class="form-group">
        <h5>User Email<span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="email" class="form-control" required="" > </div>
        
    </div>
  

</div><!-- End col-6-->

<div class="col-6">
 
<div class="form-group">
        <h5>User Password<span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="password" name="password" class="form-control" required="" > </div>
        
    </div>
  

</div><!-- End col-6-->


</div> <!--End row -->


               <div class="text-xs-right">
						      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						  </div>
            

                 
                
                   
            
					</form>
               </div><!--col-md-12-->
             </div><!--row-->
             
				
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


	  
	  </div>
  </div>


@endsection