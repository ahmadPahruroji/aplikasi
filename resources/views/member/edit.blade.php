@extends( 'layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Data Warga</h2> --}}
    <div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> WARGA
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
					<a href="{{ url('members') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
					<h5 class="pull-right">Form Edit Warga</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('members.update',$members->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" value="{{ $members->name }}"  name="name" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea type="text" class="form-control" name="alamat" placeholder="type something">{{ $members->alamat}}</textarea>
					</div>  
					<div class="form-group">
						<label>Nomor HP</label>
						<input type="text" class="form-control" value="{{ $members->no_hp }}"  name="no_hp" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>KK</label>
						<input type="text" class="form-control" value="{{ $members->kk }}"  name="kk" placeholder="type something" required> 
					</div> 
					<div class="form-group">
						<label>Keterangan</label>
						<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $members->description}}</textarea>
					</div> 
					<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Submit</button> 
					</form>
		<div class="col-2">
			
		</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
</section>
@endsection