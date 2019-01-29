@extends('layouts.coordinator')
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
                    <a href="{{ route('complaintuser.create') }}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>

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
                                    <td>Keterangan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($complaints as $cm => $complaint)
                             <tr>
                                 <td>{{ $cm+1 }}</td>
                                 <td>{{ $complaint->name }}</td>
                                 <td>
                                    <img src="{{ asset('storage/'.$complaint->image) }}" class="rounded mx-auto d-block" width="50">
                                </td>
                                <td>{{ $complaint->date }}</td>
                                <td>{{ $complaint->complain }}</td>
                                <td>{{ $complaint->description }}</td>
                                <td>
                                  <button type="button" class="btn btn-danger" onclick="destroy({{$complaint->id}})"><i class="fa fa-trash"></i> Hapus</button> 
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
                $.post("complaintuser/"+id,access)
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