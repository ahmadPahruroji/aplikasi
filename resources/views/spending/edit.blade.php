@extends( 'layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Spending</h2> --}}
    <div class="alert alert-primary" role="alert">
          <i class="fa fa-call"></i> PENGELUARAN
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
					<a href="{{ url('spendings') }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
					<h5 class="pull-right">Form Edit </h5>
				</div>
				<div class="card-body">
					<form action="{{ route('spendings.update',$spendings->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						
						<label>Nama Item</label>
							<select class="form-control select2" name="category_id">
								@foreach ($categories as $ca => $category)
								<option value="{{ $category->id }}" {{$category->id==$spendings->category_id ? 'selected':null}}>{{ $category->name }}</option>
								@endforeach
							</select>
					</div> 
					<div class="form-group">
						<label>Jumlah Pengeluaran</label>
						<input type="number" class="form-control" value="{{ $spendings->total }}"  name="total"  onkeypress="return hanyaAngka(event)" placeholder="Hanya Angka" required> 
					</div> 
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" value="{{ $spendings->date }}"  name="date" placeholder="type something" required> 
					</div> 
					<div class="form-group">
						<label>Keterangan</label>
						<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $spendings->description}}</textarea>
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