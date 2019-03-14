@extends('layouts.coordinator')
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
    		<a href="{{ route('countributionuser.create') }}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data</a>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-striped datatable">
    				<thead>
    					<tr>
    						<td>No</td>
                            <td>Nama</td>
                            {{-- <td>Bulan</td> --}}
                            <td>Jumlah</td>
                            <td>Tanggal</td>
                            <td>Status</td>
                            {{-- <td>Keterangan</td> --}}
                            <td>Action</td>
    					</tr>
    				</thead>
    				<tbody>
            
                        @foreach ($countributions as $cu => $countribution)
                         @php
               setlocale (LC_TIME, 'ID');
               $date = strftime( "%d %B %Y", strtotime($countribution->date));

               // Rupiah //
               $rupiah = "Rp " . number_format($countribution->money,2,',','.');
               @endphp
                        <tr>
                            <td>{{ $cu+1 }}</td>
                            <td>{{ $countribution->user->name }}</td>
                            {{-- <td>{{ $countribution->month }}</td> --}}
                            <td>{{ $rupiah }}</td>
                            <td>{{ $date }}</td>
                            <td><span>@if ($countribution->status == 0)
              <button type="link" value="0" class="btn btn-danger btn-sm">belum lunas</button>
              @else
              <button onclick="return confirm('apakah belum lunas?');" value="1" class="btn btn-success btn-sm">Lunas</button>
              @endif</span></td>
                            {{-- <td>{{ $countribution->description }}</td> --}}
                            <td>
                               <center>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger" onclick="destroy({{$countribution->id}})"><i class="fa fa-trash"></i> Hapus</button>
                                <a href="{{ route('countributionuser.edit',$countribution->id) }}" type="button" class="btn btn-warning" ><i class="fa fa-gear"></i> Edit</a>
                                </div>
                                </center> 
                            </td>
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
                $.post("{{ url('countributionuser') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('countributionuser') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection