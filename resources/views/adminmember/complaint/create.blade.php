@extends('layouts.member')
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
			<div class="offset-3 col-6">
				<div class="card">
					<div class="card-header">
						<a href="{{ url('complaintusers') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Back</a>
						<h5 class="pull-right"> Fill the Form</h5>
					</div>
					<div class="card-body"> 
						
						<form action="{{ route('complaintusers.store') }}" enctype="multipart/form-data" files="true" method="post">
							@csrf
							@method('post')
							<div class="form-group">
								<label>Nama User</label>
								<select class="form-control select2" name="user_id">
									
									<option value="{{ $users->id }}">{{ $users->name }}</option>
									
								</select>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="name" placeholder="type something" required>
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<!-- <img src="{{ asset('storage/uploads/avatars/default.png') }}" class="rounded mx-auto d-block" width="150"> -->
								<input required type="file" name="image" class="form-control">
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
								<label>Deskripsi</label>
								<textarea type="text" class="form-control" name="description" placeholder="type something" > </textarea>
							</div> 
							
							<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Submit</button> 
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>
@endsection