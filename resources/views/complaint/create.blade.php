@extends('layouts.admin')
@section('content')
<div class="page-header">
	<div class="container-fluid">
		{{-- <h2 class="h5 no-margin-bottom">Data Keluhan</h2> --}}
		<div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> KELUHAN
        </div>
	</div>
</div>

<section>
	
	<div class="container">
		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<a href="{{ url('complaints') }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
						<h5 class="pull-right"> Fill the Form</h5>
					</div>
					<div class="card-body"> 
						
						<form action="{{ route('complaints.store') }}" enctype="multipart/form-data" files="true" method="post">
							@csrf
							@method('post')
							<div class="form-group">
								<label>Nama User</label>
								<select class="form-control select2" name="user_id">
									@foreach ($users as $u => $user)
									<option value="{{ $user->id }}">{{ $user->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<!-- <img src="{{ asset('storage/uploads/avatars/default.png') }}" class="rounded mx-auto d-block" width="150"> -->
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="form-control" name="date" placeholder="type something" required>
							</div>
							<div class="form-group">
								<label>Keluhan</label>
								<textarea type="text" class="form-control" name="complain" placeholder="type something" > </textarea>
							</div> 
							<div class="form-group">
							{{-- <label>Status</label> --}}
							<input type="hidden" class="form-control" name="statuscomplaint_id" value="1" placeholder="type something" required>

							{{-- <select class="form-control select2" name="statuscomplaint_id">
								@foreach ($status_complaints as $s => $status)
								<option value="{{ $status->id }}">{{ $status->name }}</option>
								@endforeach
							</select> --}}
						</div> 
							
							<button type="submit" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Simpan"><i class="fa fa-check"></i></button> 
						</form>
						
					</div>
				</div>
			</div>
			<div class="col-md-2">

			</div>
		</div>
	</div>
	
</section>
@endsection