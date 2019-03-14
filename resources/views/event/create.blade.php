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
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header border-primary">
						<a href="{{ url('events') }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
						<h5 class="pull-right">Form Kegiatan</h5>
					</div>
					<div class="card-body"> 
						
						<form action="{{ route('events.store') }}" enctype="multipart/form-data" files="true" method="post">
							@csrf
							@method('post')
							@php
							$tanggal = date_default_timezone_get('Asia/Jakarta'); date("Y-m-d");
							$tanggal_data = date("Y-m-d");
							$date = date("Y-m-d", strtotime($tanggal_data));
							@endphp
							<div class="form-group">
								<div class="form-group">

								<input type="hidden" class="form-control" name="user_id" value="1" placeholder="type something" required>
							</div>
							</div>
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control" name="name" placeholder="type something" required>
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<!-- <img src="{{ asset('storage/uploads/avatars/default.png') }}" class="rounded mx-auto d-block" width="150"> -->
								<input type="file" name="image" class="form-control">
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="date" class="datepicker form-control" name="date" placeholder="type something" value="{{ $date }}" required>
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea type="text" class="form-control" name="description" placeholder="type something" > </textarea>
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