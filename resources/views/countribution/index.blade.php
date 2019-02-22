@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Data Iuran</h2> --}}
</div>
</div>
<section>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Iuran </h3>
            </div>
            <div class="card">
               <div class="card-header border-primary">
                  <i class="fa fa-flag"></i> List Iuran
                  <a href="{{ route('countributions.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped datatable">
                        <thead>
                           <tr>
                              <td>No</td>
                              <td>Nama</td>
                              <td>Jumlah Iuran</td>
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
                        $rupiah = "Rp " . number_format($countribution->total,2,',','.');
                        @endphp
                        <tr>
                            <td>{{ $cu+1 }}</td>
                            <td>{{ $countribution->member->name }}</td>
                            {{-- <td>{{ $countribution->month }}</td> --}}
                            <td>{{ $rupiah }}</td>
                            <td>{{ $date }}</td>
                            <td><span class="label radius-circle bg-primary float-left">{{ $countribution->status->name }}</span></td>
                            {{-- <td>{{ $countribution->description }}</td> --}}
                            <td>
                             <center>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger" onclick="destroy({{$countribution->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    <a href="{{ route('countributions.edit',$countribution->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a>
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
                $.post("{{ url('countributions') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('countributions') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection