@extends( 'layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Data Iuran</h2>
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
					<a href="{{ url('countributions') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
					<h5 class="pull-right">Form Edit Iuran</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('countributions.update',$countributions->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" value="{{ $countributions->name }}"  name="name" placeholder="type something" required> 
					</div> 
					<div class="form-group">
						<label>Bulan</label>
						<input type="text" class="form-control" value="{{ $countributions->month }}"  name="month" placeholder="type something" required> 
					</div> 
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" class="form-control" value="{{ $countributions->total }}"  name="total" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" value="{{ $countributions->date }}"  name="date" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>Status</label>
						<input type="text" class="form-control" value="{{ $countributions->status }}"  name="status" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $countributions->description}}</textarea>
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