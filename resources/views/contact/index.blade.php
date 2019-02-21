@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Kontak</h2> --}}
</div>
</div>
<section>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Data Kontak </h3>
            </div>
            <div class="card">
               <div class="card-header border-primary">
                  <i class="fa fa-flag"></i> List Kontak
                  <a href="{{ route('contacts.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped datatable">
                        <thead>
                           <tr>
                              <td>No</td>
                              <td>Nama</td>
                              <td>Nomor HP</td>
                              <td>Keterangan</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>

                        @foreach ($contacts as $co => $contact)
                        <tr>
                            <td>{{ $co+1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->no_hp }}</td>
                            <td>{{ $contact->description }}</td>
                            <td>
                             <center>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger" onclick="destroy({{$contact->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    <a href="{{ route('contacts.edit',$contact->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a>
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
                $.post("{{ url('contacts') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('contacts') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection