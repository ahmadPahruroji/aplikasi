@extends('layouts.admin')
@section('content')
<div class="page-header">
	<div class="container-fluid">
		{{-- <h2 class="h5 no-margin-bottom">Data Kegiatan</h2> --}}
		<div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> KEGIATAN
        </div>
	</div>
</div>

<section>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header border-primary">
						<a href="{{ url('events') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Back</a>
						<h5 class="pull-right">Form Kegiatan</h5>
					</div>
					<div class="card-body"> 
						
						<form action="{{ route('events.store') }}" enctype="multipart/form-data" files="true" method="post">
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
								<label>Nama</label>
								<input type="text" class="form-control" name="name" placeholder="type something" required>
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<!-- <img src="{{ asset('storage/uploads/avatars/default.png') }}" class="rounded mx-auto d-block" width="150"> -->
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="datepicker form-control" name="date" placeholder="type something" required>
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