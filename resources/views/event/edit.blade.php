@extends( 'layouts.admin')
@section('content')
<div class="page-header">
	<div class="container-fluid">
		{{-- <h2 class="h5 no-margin-bottom">Data Warga</h2> --}}
		<div class="alert alert-primary" role="alert">
			<i class="fa fa-call"></i> KEGIATAN
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
						<a href="{{ url('events') }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
						<h5 class="pull-right">Form Edit Kegiatan</h5>
					</div>
					<div class="card-body">
						<form action="{{ route('events.update',$events->id) }}" enctype="multipart/form-data" files="true" method="post">
							@method('put')
							@csrf

							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control" value="{{ $events->name }}"  name="name" placeholder="type something" required> 
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<img src="{{ asset('storage/'.$events->image) }}" class="rounded mx-auto d-block" width="50">
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="form-control" value="{{ $events->date }}"  name="date" placeholder="type something" required> 
							</div>
							{{-- <div class="form-group">
								<label>KTP</label>
								<input type="text" class="form-control" value="{{ $officers->ktp }}"  name="ktp" placeholder="type something" required> 
							</div> 
							<div class="form-group">
								<label>Alamat</label>
								<textarea type="text" class="form-control" name="address" placeholder="type something">{{ $officers->address}}</textarea>
							</div> --}}  
							<div class="form-group">
								<label>Keterangan</label>
								<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $events->description}}</textarea>
							</div> 
							<button type="submit" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Simpan"><i class="fa fa-check"></i></button> 
						</form>
						<div class="col-md-2">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@endsection