@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Pengeluaran</h2>
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
					<a href="{{ url('spendings') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
					<h5 class="pull-right">Form Pengeluaran</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('spendings.store') }}" method="post">
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
						<label>Kategori Pengeluaran</label>
							<select class="form-control select2" name="category_id">
								@foreach ($categories as $ca => $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" class="form-control" name="total" placeholder="type something" required>
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" name="date" placeholder="type something" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea type="text" class="form-control" name="description" placeholder="type something" > </textarea>
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