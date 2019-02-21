@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Kategori</h2> --}}
</div>
</div>

<section>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Kategori </h3>
            </div>
            <div class="card">
                <div class="card-header border-primary">
                  <i class="fa fa-flag"></i> List Kategori
                  <a href="{{ route('categories.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a>

              </div>
              <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped datatable">
                        <thead>
                           <tr>
                              <td>No</td>
                              <td>Nama Kategori</td>
                              <td>Deskripsi</td>
                              <td>Aksi</td>
                          </tr>
                      </thead>
                      <tbody>
                       @foreach ($categories as $ca => $category)
                       <tr>
                        <td>{{ $ca+1 }}</td>
                        <td>{{ $category-> name }}</td>
                        <td>{{ $category-> description }}</td>
                        <td>
                            <center>
                                <a href="{{ route('categories.edit',$category->id) }}" role="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-pencil"></i>Edit</a>
                                <button type="submit" class="btn btn-danger" onclick="destroy({{$category->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button></td>
                            </center>
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
    const destroy = (id)=>{
        swal({
            type:"warning",
            title:"Apa Kamu Yakin?",
            text:"Anda tidak akan dapat mengembalikan data ini!",
            showCancelButton:true,
            cancelButtonColor:"#d33",
            confirmButtonText:"Ya, hapus!",
            confirmButtonColor:"#3085d6"
        }).then(result=>{
            if(result.value){
                let access = {
                    id:id,
                    _method:"delete",
                    _token:"{{ csrf_token() }}"
                }

                $.post("{{ url('categories') }}/"+id,access)
                .done(res=>{
                    swal({
                        title:"Oke!",
                        text:"Anda menghapus Data Kategori UMKM",
                        type:"success"
                    }).then(result=>{
                        window.location = "{{ url('categories') }}";
                    });
                })
                .fail(err=>{
                    // console.log(err);
                    swal("Oops","Something not right","error");
                });
            }
        });
    }
</script>
@endsection