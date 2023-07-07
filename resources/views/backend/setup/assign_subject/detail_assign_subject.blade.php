@extends('admin.admin_master')
@section('admin')



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title"> Fee Amount Details</h3>
				  <a href="{{ route('assign.subject.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Fee Amount</a>
				</div>

				<!-- /.box-header -->
				<div class="box-body">
					<h4><strong>Class Name : </strong>{{ $detailsData['0']['student_class']['name'] }}</h4>
					<div class="table-responsive">
					  <table class="table table-bordered table-striped">
						<thead class="thead-light">
							<tr>
								<th width="5%">SL</th>
								<th>Subject</th>							
								<th width="20%">Full Mark</th>
								<th width="20%">Pass Mark</th>
								<th width="20%">Subjective Mark</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($detailsData as $key=> $details)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $details['school_subject']['name'] }}</td>						
								<td>{{ $details->full_mark }}</td>
								<td>{{ $details->pass_mark }}</td>
								<td>{{ $details->subjective_mark }}</td>
						
							</tr>
						@endforeach
						</tbody>
						<tfoot>
							<tr>
							<th width="5%">SL</th>
								<th>Subject</th>							
								<th width="20%">Full Mark</th>
								<th width="20%">Pass Mark</th>
								<th width="20%">Subjective Mark</th>
							</tr>
						</tfoot>
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			        
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>


@endsection