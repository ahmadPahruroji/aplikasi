@extends( 'layouts.coordinator')
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
					<h5 class="pull-right">Form Edit Iuran</h5>
				</div>
				<div class="card-body">
					<form action="{{ route('countributionuser.update',$countributions->id) }}" method="post">
						@method('put')
						@csrf

					<div class="form-group">
						<label>Nama Warga</label>
						<select class="form-control select2" name="countribution[member_id]">
								@foreach ($members as $m => $member)
								<option value="{{ $member->id }}" {{$member->id==$countributions->member_id ? 'selected':null}}>{{ $member->name }}</option>
								@endforeach
							</select>
					</div> 
					{{-- <div class="form-group">
						<label>Bulan</label>
						<input type="text" class="form-control date" value="{{ $countributions->month }}"  name="countribution[month]" placeholder="type something" required> 
					</div>  --}}
					<div class="form-group">
						<label>Jumlah Iuran</label>
						<input type="text" class="form-control" value="{{ $countributions->total }}"  name="countribution[total]" onkeypress="return hanyaAngka(event)" placeholder="Hanya Angka" required> 
					</div>
					<div class="form-group">
						<label>Metode Pembayaran</label>
							<select class="form-control select2" name="countribution[payment_id]">
								@foreach ($payments as $p => $payment)
								<option value="{{ $payment->id }}" {{$payment->id==$countributions->payment_id ? 'selected':null}}>{{ $payment->name }}</option>
								@endforeach
							</select>
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" value="{{ $countributions->date }}"  name="countribution[date]" placeholder="type something" required> 
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control select2" name="countribution[status_id]">
								@foreach ($statuses as $s => $status)
								<option value="{{ $status->id }}" {{$status->id==$countributions->status_id ? 'selected':null}}>{{ $status->name }}</option>
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