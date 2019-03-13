@extends('layouts.member')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Data Iuran</h2>
  </div>
</div>
<section>
    
<div class="container-fluid">
    <div class="card">
    	<div class="card-header">
    		<i class="fa fa-flag"></i> List Iuran
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table datatable" border="2">
    				<thead>
    					<tr>
    						<td>No</td>
                            <td style="text-align: center;">Nama</td>
                            <td style="text-align: center;">Jumlah Iuran</td>
                            <td style="text-align: center;">Tanggal</td>
                            <td style="text-align: center;">Status</td>
                            
    					</tr>
    				</thead>
    				<tbody>
    		
                        @foreach ($countributions as $cu => $countribution)
                         @php
                        setlocale (LC_TIME, 'ID');
               $date = strftime( "%d %B %Y", strtotime($countribution->date));

               // Rupiah //
               $rupiah = "Rp " . number_format($countribution->money->money,2,',','.');
               @endphp
                        <tr>
                            <td>{{ $cu+1 }}</td>
                            <td>{{ $countribution->user->name }}</td>
                            <td style="text-align: right;">{{ $rupiah }}</td>
                            <td>{{ $date }}</td>
                            <td><span class="label radius-circle bg-info float-left">
                                @if ($countribution->status == 0)
              <button type="link" value="0" class="btn btn-danger btn-sm">belum lunas</button>
              @else
              <button onclick="return confirm('apakah belum lunas?');" value="1" class="btn btn-success btn-sm">Lunas</button>
              @endif</span></td>
                        </tr>
                        @endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
</div>

</section>
@endsection
@section('script')
<script type="text/javascript">
    $(()=>{
        console.log("user page");
    });

    const destroy = (id)=>{
        swal({
            title:"Apa Kamu Yakin?",
            text:"Anda tidak akan dapat mengembalikan data ini!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then(result=>{
            if(result.value){
                let access = {
                    id:id,
                    _method:'delete',
                    _token:"{{csrf_token()}}"
                }
                $.post("{{ url('countributionusers') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('countributionusers') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection