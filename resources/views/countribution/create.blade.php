@extends('layouts.admin')
@section('content')
@php
 $tanggal = date_default_timezone_get('Asia/Jakarta'); date("Y-m-d");
  $tanggal_data = date("Y-m-d");
  $date = date("d-m-Y", strtotime($tanggal_data));
@endphp
<div class="page-header">
	<div class="container-fluid">
		{{-- <h2 class="h5 no-margin-bottom">Data Iuran</h2> --}}
		<div class="alert alert-primary" role="alert">
			<i class="fa fa-call"></i> 
			IURAN
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
						<a href="{{ url('countributions') }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Kembali"><i class="fa fa-arrow-left"> </i></a>
						<h5 class="pull-right">Form Iuran</h5>
					</div>
					<div class="card-body">
						<form action="{{ route('countributions.store') }}" method="post">
							{{ csrf_field()}} 
							<div class="form-group">

								<input type="hidden" class="form-control" name="user_id" value="1" placeholder="type something" required>
							</div>
							<div class="form-group">
								<label>Nama Warga</label>
								<select class="form-control select2" name="member_id">
									@foreach ($members as $m => $member)
									<option value="{{ $member->id }}">{{ $member->name }}</option>
									@endforeach
								</select>
							</div>
				
						<div class="form-group">
							<label>Jumlah</label>
							<input type="text" class="form-control" name="total" onkeypress="return hanyaAngka(event)"
							placeholder="Hanya Angka" maxlength="5" required>
						</div>
						<div class="form-group">
							<label>Metode Pembayaran</label>
							<select class="form-control select2" name="payment_id">
								@foreach ($payments as $p => $payment)
								<option value="{{ $payment->id }}">{{ $payment->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" class="form-control" name="date" placeholder="type something" value="{{ $date }}" required>
						</div>
						<div class="form-group">
							{{-- <label>Status</label> --}}
							<input type="hidden" class="form-control" name="status_id" value="2" placeholder="type something" required>

							{{-- <select class="form-control select2" name="status_id">
								@foreach ($statuses as $s => $status)
								<option value="{{ $status->id }}">{{ $status->name }}</option>
								@endforeach
							</select> --}}
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
@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.date').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			locale: {
				format: 'MMMM'
			}
		});
	});
</script>