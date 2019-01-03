@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Users</h2>
  </div>
</div>

<section>
	
<div class="container">
	<div class="row">
		<div class="col-2">
			
		</div>
		<div class="col-8">
			<div class="card">
				<div class="card-header">
					<a href="{{ url('users') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
					<h5 class="pull-right">Form Edit User</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('users.update',$users->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						
						<label>Role ID</label>
							<select class="form-control select2" name="role_id">
								@foreach ($roles as $r => $role)
								<option value="{{ $role->id }}" {{$role->id==$users->role_id ? 'selected':null}}>{{ $role->name }}</option>
								@endforeach
							</select>
					</div> 
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" value="{{ $users->name }}"  name="name" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" value="{{ $users->email }}"  name="email" placeholder="type something" required> 
					</div> 
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" value="{{ $users->password }}"  name="password" placeholder="type something" required> 
					</div> 
					<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Submit</button> 
		<div class="col-2">
			
		</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
</section>
@endsection