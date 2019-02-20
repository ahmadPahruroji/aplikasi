@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Biodata</h2> --}}
</div>
</div>
<section>
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Data Biodata </h3>
            </div>
            <div class="card">
               <div class="card-header border-primary">
                  <i class="fa fa-flag"></i> List Biodata
{{--                   <button type="button" class="btn btn-danger" onclick="destroy({{$user->id}})" data-toggle="tooltip" data-placement="left" title="Hapus Data"><i class="fa fa-trash"></i></button>
                <a href="{{ route('users.edit',$user->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a> --}}

                  <a role="button" href="{{ route('biodatas.create') }}" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="left" title="Tambah Data"><i class="fa fa-plus"></i></a>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped datatable">
                        <thead>
                           <tr>
                              <td>No</td>
                              <td>Nama Depan</td>
                              <td>Nama Belakang</td>
                              <td>Nomor HP</td>
                              <td>Alamat</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>
                          
                        @foreach ($biodatas as $b => $biodata)
                        <tr>
                            <td>{{ $b+1 }}</td>
                            <td>{{ $biodata->first_name }}</td>
                            <td>{{ $biodata->last_name }}</td>
                            <td>{{ $biodata->no_hp }}</td>
                            <td>{{ $biodata->address }}</td>
                            <td>
                             <center>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger" onclick="destroy({{$biodata->id}})" data-toggle="tooltip" data-placement="left" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    <a role="button" href="{{ route('biodatas.edit',$biodata->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a>
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
                $.post("{{ url('biodatas') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('biodatas') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection