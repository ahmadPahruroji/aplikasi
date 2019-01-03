@extends( 'layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Data Koordinator</h2>
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
					<a href="{{ url('coordinators') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
					<h5 class="pull-right">Form Edit Koordinator</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('coordinators.update',$coordinators->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						
						<label>Nama Warga</label>
							<select class="form-control select2" name="member_id">
								@foreach ($members as $m => $member)
								<option value="{{ $member->id }}" {{$member->id==$coordinators->member_id ? 'selected':null}}>{{ $member->name }}</option>
								@endforeach
							</select>
					</div> 
					<div class="form-group">
						<label>Keterangan</label>
						<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $coordinators->member->description}}</textarea>
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