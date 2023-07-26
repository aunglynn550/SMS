@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js">
  </script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Other Costs </h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row"><!--main row -->
       <div class="col"><!--main col -->
           <form method="post" action="{{ route('store.other.cost') }}" enctype="multipart/form-data">
           @csrf

             <div class="row">
               <div class="col-12">                          


               <div class="row"><!--1st row -->

                    <div class="col-md-3">
                    <div class="form-group">
                            <h5>Amount<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="amount" class="form-control" required="">
                            
                            </div>
                        </div>

                            
                    </div><!-- End 1st col md 3 -->

                    <div class="col-md-3">
                    <div class="form-group">
                            <h5>Date<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="date" name="date" class="form-control" required="">
                            
                            </div>
                        </div>
                    </div><!-- End 2nd col md 3 -->

                    <div class="col-md-3">
               
                            <h5>Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" class="form-control" id="image" > 
                            </div><!-- End-controls-->
                    

                    </div><!-- End 3rd col md 3 -->

                    <div class="col-md-3">
               
                    <div class="form-group">

                        <div class="controls">
                            <img id="showImage" class="" 
                            src="{{ !(empty($user->image))? url('upload/user_images/'.$user->image) : url('upload/no_image.jpg') }}" 
                            alt="User Avatar" style="width:100px; width:100px; border:1px solid #000000;">
                        </div><!-- End-controls-->

                        </div><!--End-Form-Group-->

                    </div><!-- End 4th col md 3 -->




                </div><!-- End 1st row -->


                <div class="row"><!--2nd row -->
                    <div class="col-md-12">
                    <div class="form-group">
								<h5>Description <span class="text-danger">*</span></h5>
								<div class="controls">
									<textarea name="description" id="description" class="form-control" required="" placeholder="Textarea text"></textarea>
								<div class="help-block"></div></div>
							</div>

                </div><!-- End col-md-12 -->
                
                </div><!-- End 2nd row -->



                        <div class="text-xs-right">
						      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
						</div>

            
					</form>
               </div><!--col-md-12-->
             </div><!--row-->
             
				

                </div><!--End main col-->
            </div>


			</div><!--End main row-->


			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>


	  
	  </div><!--End content-wrapper-->
  </div><!--End container-full -->




  <script type="text/javascript">
  $(document).ready(function() {

    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

  });
</script>


@endsection