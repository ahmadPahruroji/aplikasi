@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Data Koordinator</h2>
</div>
</div>
<section>

    <div class="container-fluid">
        <div class="card">
           <div class="card-header">
              <i class="fa fa-flag"></i> List Koordinator
              <a href="{{ route('coordinators.create') }}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data</a>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                 <table class="table table-striped datatable">
                    <thead>
                       <tr>
                          <td>No</td>
                          <td>Nama</td>
                          <td>ALAMAT/BLOK</td>
                          <td>KETERANGAN</td>
                          <td>Action</td>
                      </tr>
                  </thead>
                  <tbody>

                    @foreach ($coordinators as $c => $coordinator)
                    <tr>
                        <td>{{ $c+1 }}</td>
                        <td>{{ $coordinator->member->name }}</td>
                        <td>{{ $coordinator->member->alamat }}</td>
                        <td>{{ $coordinator->description }}</td>
                        <td>
                         <center>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger" onclick="destroy({{$coordinator->id}})"><i class="fa fa-trash"></i> Hapus</button>
                                <a href="{{ route('coordinators.edit',$coordinator->id) }}" type="button" class="btn btn-warning" ><i class="fa fa-gear"></i> Edit</a>
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
                $.post("{{ url('coordinators') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('coordinators') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection