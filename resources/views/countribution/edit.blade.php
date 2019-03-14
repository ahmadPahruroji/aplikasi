@extends( 'layouts.admin')
@section('content')
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
					<a href="{{ url('countributions') }}" role="button" class="btn btn-secondary"><i class="fa fa-arrow-left" data-toggle="tooltip" data-placement="right" title="Kembali"> </i></a>
					<h5 class="pull-right">Form Edit Iuran</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('countributions.update',$countributions->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						<label>Nama Warga</label>
						<select class="form-control select2" name="user_id">
								@foreach ($users as $u => $user)
								<option value="{{ $user->id }}" {{$user->id==$countributions->user_id ? 'selected':null}}>{{ $user->name }}</option>
								@endforeach
							</select>
					</div> 
					{{-- <div class="form-group">
						<label>Bulan</label>
						<input type="text" class="form-control date" value="{{ $countributions->month }}"  name="month" placeholder="type something" required> 
					</div>  --}}
					{{-- <div class="form-group">
								<label>Jumlah Uang</label>
								<select class="form-control select2" name="money_id">
									@foreach ($money as $m => $moneys)
									<option value="{{ $moneys->id }}">{{ $moneys->money }}</option>
									@endforeach
								</select>
							</div> --}}
					<div class="form-group">
						<label>Jumlah Uang</label>
								{{-- <select class="form-control select2" name="money_id">
									@foreach ($money as $m => $moneys)
									<option value="{{ $moneys->id }}" {{$moneys->id==$countributions->money_id ? 'selected':null}}>{{ $moneys->money }}</option>
									@endforeach
								</select> --}}
								<select class="form-control select2" name="money">
								<option>{{ $countributions->money }}</option>
								<option>50000</option>
								<option>75000</option>
								<option>100000</option>
								<option>150000</option>
								<option>200000</option>
								<option>250000</option>
								<option>300000</option>
								<option>375000</option>
								<option>450000</option>
								<option>525000</option>
								<option>600000</option>
								<option>675000</option>
								<option>750000</option>
								<option>825000</option>
								<option>900000</option>
							</select> 
					</div>
					<div class="form-group">
						<label>Metode Pembayaran</label>
							<select class="form-control select2" name="payment_id">
								@foreach ($payments as $p => $payment)
								<option value="{{ $payment->id }}" {{$payment->id==$countributions->payment_id ? 'selected':null}}>{{ $payment->name }}</option>
								@endforeach
							</select>
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" value="{{ $countributions->date }}"  name="date" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" value="{{ $countributions->status }}"  name="status" placeholder="type something" required> 
					</div>
					{{-- <div class="form-group">
						<label>Keterangan</label>
						<textarea type="text" class="form-control" name="description" placeholder="type something">{{ $countributions->description}}a</textarea>
					</div> --}} 
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