@extends( 'layouts.admin')
@section('content')
<div class="page-header">
	<div class="container-fluid">
		<h2 class="h5 no-margin-bottom">Data Keluhan</h2>
	</div>
</div>

<section>
	
	<div class="container">
		<div class="row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<a href="{{ url('complaints') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
						<h5 class="pull-right">Form Edit Status</h5>
					</div>
					<div class="card-body">
						<form action="{{ route('complaints.update',$complaints->id) }}" method="post">
							@method('put')
							@csrf

							<div class="form-group">
								<label>Status</label>
								<select class="form-control select2" name="statuscomplaint_id">
									@foreach ($status_complaints as $s => $status)
									<option value="{{ $status->id }}">{{ $status->name }}</option>
									@endforeach
								</select>
							</div> 
							<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Submit</button> 
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