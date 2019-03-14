@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Data Keluhan</h2> --}}
</div>
</div>

<section>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Data Keluhan </h3>
            </div>
            <div class="card">
                <div class="card-header border-primary">
                    <i class="fa fa-flag"></i> List Keluhan
                    {{-- <a href="{{ route('complaints.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a> --}}

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Gambar</td>
                                    <td>Tanggal</td>
                                    <td>Keluhan</td>
                                    <td>Status</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($complaints as $cm => $complaint)
                               @php
                               setlocale (LC_TIME, 'ID');
                               $date = strftime( "%d %B %Y", strtotime($complaint->date));
                               @endphp
                               <tr>
                                   <td>{{ $cm+1 }}</td>
                                   <td>{{ $complaint->user->name }}</td>
                                   <td style="display: box">
                                    <img data-toggle="magnify" src="{{ asset('storage/'.$complaint->image) }}" class="img-fluid" width="50">
                                </td>
                                <td>{{ $date }}</td>
                                <td>{{ $complaint->complain }}</td>
                                <td><span>
                                  <form action="{{ route('complaints.status', $complaint->id) }}" method="post">
              @csrf
              @if ($complaint->statuscomplaint == 0)
              <button type="link" onclick="return confirm('apakah sudah mulai?');" value="0" class="btn btn-danger btn-sm"><b>Belum proses</b></button>
              @elseif ($complaint->statuscomplaint == 1)
              <button type="link" onclick="return confirm('apakah sudah di proses?');" value="1" class="btn btn-primary btn-sm"><b>proses</b></button>
              @else
              <button type="link" onclick="return confirm('apakah belum di proses?');" value="2" class="btn btn-success btn-sm"><b>selesai</b></button>
              @endif
            </form></span></td>
                                <td>
                                  <button type="button" class="btn btn-danger" onclick="destroy({{$complaint->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button> 
                                  <a href="{{ route('complaints.edit',$complaint->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a>
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

    });

    const destroy = (id)=>{
        swal({
            title:"Apakah Anda Yakin?",
            text:"Anda Tidak Akan Dapat Mengembalikan Data Ini!",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: "Batal",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya Yakin!'
        }).then(result=>{
            if(result.value){
                let access = {
                    id:id,
                    _method:'delete',
                    _token:"{{csrf_token()}}"
                }
                $.post("complaints/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Berhasil",
                        text:"Anda Berhasil menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location.reload();
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection