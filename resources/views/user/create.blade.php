@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Users</h2> --}}
    <div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> USER
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
				<div class="card-header border-primary">
{{-- 					<button type="button" class="btn btn-danger" onclick="destroy({{$user->id}})" data-toggle="tooltip" data-placement="left" title="Hapus Data"><i class="fa fa-trash"></i></button>
                <a href="{{ route('users.edit',$user->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a> --}}

					<a role="button" href="{{ url('users') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
					<h5 class="pull-right">Form User</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('users.store') }}" method="post">
					{{ csrf_field()}} 
					<div class="form-group">
						<label>Role ID</label>
							<select class="form-control select2" name="role_id">
								@foreach ($roles as $r => $role)
								<option value="{{ $role->id }}">{{ $role->name }}</option>
								@endforeach
							</select>
					</div>
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label>Nama</label>
						<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="type something" required> 

						@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label>Email</label>
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="type something" required>

						@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif 
					</div> 
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label>Password</label>
						<input id="password" type="password" class="form-control" name="password" placeholder="type something" required> 

						@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div> 
					<div class="form-group">
						<label>Confirm Password</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
					</div>			
					
					<button type="submit" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="left" title="Simpan"><i class="fa fa-check"></i></button>

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