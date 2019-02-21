@extends('layouts.admin')
@section('content')
<div class="page-header">
	<div class="container-fluid">
		{{-- <h2 class="h5 no-margin-bottom">Kategori</h2> --}}
		<div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> KATEGORI
        </div>
	</div>
</div>

<section>
	
	<div class="container">
		<div class="row">
			<div class=" col-md-8">
				<div class="card">
					<div class="card-header border-primary">
						<a href="{{ url('categories') }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
						<h5 class="pull-right"> Edit Form</h5>
					</div>
					<div class="card-body"> 
						
						<form action="{{ route('categories.update',$categories->id) }}" method="post">
							@method('put')
							@csrf
							<div class="form-group">
								<label>Nama Kategori</label>
								<input type="text" class="form-control" name="name" placeholder="type something" value="{{ $categories->name }}" required> 
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $categories->description }}</textarea>
							</div> 
							<button type="submit" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Simpan"><i class="fa fa-check"></i></button> 
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>
@endsection