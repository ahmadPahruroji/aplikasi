@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Data Petugas</h2> --}}
</div>
</div>

<section>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Data Petugas </h3>
            </div>
            <div class="card">
                <div class="card-header border-primary">
                    <i class="fa fa-flag"></i> List Petugas
                    <a href="{{ route('officers.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped datatable">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Petugas</td>
                                    <td>Foto</td>
                                    <td>Nomor WA</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($officers as $of => $officer)
                             <tr>
                                 <td>{{ $of+1 }}</td>
                                 <td>{{ $officer->name }}</td>
                                 <td>
                                    <img src="{{ asset('storage/'.$officer->image) }}" class="rounded mx-auto d-block" width="70">
                                </td>
                                <td>{{ $officer->no_wa }}</td>
                                <td>
                                  <button type="button" class="btn btn-danger" onclick="destroy({{$officer->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button>

                                  <a href="{{ route('officers.edit',$officer->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a> 
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
                $.post("officers/"+id,access)
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