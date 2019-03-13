@extends('layouts.coordinator')
@section('content')
<div class="page-header">
	<div class="container-fluid">
		<h2 class="h5 no-margin-bottom">Data Iuran</h2>
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
						<a href="{{ url('countributionuser') }}" type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"> </i> Kembali</a>
						<h5 class="pull-right">Form Iuran</h5>
					</div>
					<div class="card-body">
						<form action="{{ route('countributionuser.store') }}" method="post">
							{{ csrf_field()}} 
							@php
							$tanggal = date_default_timezone_get('Asia/Jakarta'); date("Y-m-d");
							$tanggal_data = date("Y-m-d");
							$date = date("Y-m-d", strtotime($tanggal_data));
							@endphp
							{{-- <div class="form-group">

								<input type="hidden" class="form-control" name="countribution[user_id]" value="{{ $users->id }}" placeholder="type something" required>
							</div> --}}
							{{-- <div class="form-group">
								<label>Nama User</label>
								<select class="form-control select2" name="countribution[user_id]">
									<option value="{{ $users->id }}">{{ $users->name }}</option>
								</select>
							</div> --}}
							<div class="form-group">
								<label>Nama Warga</label>
								<select class="form-control select2" name="countribution[user_id]">
									@foreach ($users as $u => $user)
									<option value="{{ $user->id }}">{{ $user->name }}</option>
									@endforeach
								</select>
							</div>
							{{-- <div class="form-group">
								<label>Bulan</label>
								<input type="text" class="form-control" name="month" placeholder="type something" required>
								<select class="form-control select2" name="month">
								<option>Januari</option>
								<option>Februari</option>
								<option>Maret</option>
								<option>April</option>
								<option>Mei</option>
								<option>Juni</option>
								<option>Juli</option>
								<option>Agustus</option>
								<option>September</option>
								<option>Oktober</option>
								<option>November</option>
								<option>Desember</option>
							</select>
							<input type="text" class="form-control date" name="countribution[month]" />

						</div> --}}
						<div class="form-group">
								<label>Jumlah Iuran</label>
								<select class="form-control select2" name="countribution[money_id]">
									@foreach ($money as $m => $moneys)
									<option value="{{ $moneys->id }}">{{ $moneys->money }}</option>
									@endforeach
								</select>
							</div>
						{{-- <div class="form-group">
							<label>Jumlah</label>
							<input type="text" class="form-control" name="countribution[total]" onkeypress="return hanyaAngka(event)"
							placeholder="Hanya Angka" maxlength="10" required>
						</div> --}}
						<div class="form-group">
							<label>Metode Pembayaran</label>
							<select class="form-control select2" name="countribution[payment_id]">
								@foreach ($payments as $p => $payment)
								<option value="{{ $payment->id }}">{{ $payment->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Tanggal</label>
							<input type="date" class="form-control" name="countribution[date]" placeholder="type something" value="{{ $date }}" required>
						</div>
						<div class="form-group">
							{{-- <label>Status</label> --}}
							<input type="hidden" class="form-control" name="countribution[status]" value="0" placeholder="type something" required>
							{{-- <input type="hidden" class="form-control" name="countribution[status_id]" value="2" placeholder="type something" required> --}}

							{{-- <select class="form-control select2" name="status_id">
								@foreach ($statuses as $s => $status)
								<option value="{{ $status->id }}">{{ $status->name }}</option>
								@endforeach
							</select> --}}
						</div>

						<button type="submit" class="btn btn-success pull-right"><i class="fa fa-check"></i> Submit</button>

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