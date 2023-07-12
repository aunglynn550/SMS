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
     <h4 class="box-title">Update User</h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">
           <form methd="post" action="{{ route('users.update', $editData->id) }}">
             <div class="row">
               <div class="col-12">
                
               
               <div class="row">


               <div class="col-6">
                
               <div class="form-group">
                       <h5>User Role <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="role" required="" class="form-control">
                               <option value="" selected="" disabled="">Select Role</option>
                               <option value="Admin" {{ $editData->role =="Admin" ? "selected":""}}>Admin</option>
                               <option value="Operator" {{ $editData->role =="Operator" ? "selected":""}}>Operator</option>
                           </select>
                       
                    </div><!-- End-controls-->
                   </div><!-- End-form-group-->

               </div><!-- End col-6-->

               <div class="col-6">
                
               <div class="form-group">
                       <h5>User Name<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" class="form-control" value="{{ $editData->name }}" required="" > </div>
                       
                   </div>
                 

               </div><!-- End col-6-->
           

               </div> <!--End row -->





               <div class="row">


<div class="col-6">
 
<div class="form-group">
        <h5>User Email<span class="text-danger">*</span></h5>
        <div class="controls">
            <input type="text" name="email" class="form-control" value="{{ $editData->email }}" required="" > </div>
        
    </div>
  

</div><!-- End col-6-->

<div class="col-6">
 

</div><!-- End col-6-->


</div> <!--End row -->


               <div class="text-xs-right">
						      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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