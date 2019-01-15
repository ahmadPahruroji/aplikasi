@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Biodata</h2> --}}
    <div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> BIODATA
        </div>
  </div>
</div>

<section>
	
<div class="container">
	
	<div class="row">
		<div class="col-2">
			
		</div>
		<div class="col-8">
			<div class="card">
				<div class="card-header border-primary">
					<a href="{{ url('biodatas') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
					<h5 class="pull-right">Form Biodata</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('biodatas.store') }}" method="post">
					{{ csrf_field()}} 
					<div class="form-group">
						<label>User</label>
							<select class="form-control select2" name="user_id">
								@foreach ($users as $u => $user)
								<option value="{{ $user->id }}">{{ $user->name }}</option>
								@endforeach
							</select>
					</div>
					<div class="form-group">
						<label>Nama Depan</label>
						<input type="text" class="form-control" name="first_name" placeholder="type something" required>
					</div>
					<div class="form-group">
						<label>Nama Belakang</label>
						<input type="text" class="form-control" name="last_name" placeholder="type something" required>
					</div>			
					<div class="form-group">
						<label>Nomor HP</label>
						<input type="text" class="form-control" name="no_hp" placeholder="type something" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea type="text" class="form-control" name="address" placeholder="type something" > </textarea>
					</div>
					
					<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Submit</button>

					</form> 
				</div>
			</div>
		</div>
		<div class="col-2">
		</div>
	</div>
	
</div>
	
</section>
@endsection