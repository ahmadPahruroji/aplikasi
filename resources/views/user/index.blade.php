@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Users</h2> --}}
  </div>
</div>
</div>
<section>

  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
        <h3> Data User </h3>
      </div>
      <div class="card">
       <div class="card-header border-primary">
        <i class="fa fa-flag"></i> List Users 
        <a href="{{ route('users.create') }}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
         <table class="table table-striped datatable">
          <thead>
           <tr>
            <td>No</td>
            <td>Role</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $u => $user)
          <tr>
            <td>{{ $u+1 }}</td>
            <td>{{ $user->role->name }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
             <center>
              <div class="btn-group">
                <button type="button" class="btn btn-danger" onclick="destroy({{$user->id}})"><i class="fa fa-trash"></i> Hapus</button>
                <a href="{{ route('users.edit',$user->id) }}" type="button" class="btn btn-warning" ><i class="fa fa-gear"></i> Edit</a>
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
        $.post("{{ url('users') }}/"+id,access)
        .done(res=>{
          console.log(res);
          swal({
            title:"Oke",
            text:"Anda menghapus Data",
            type:"success",
          }).then(result=>{
            window.location = "{{ url('users') }}";
          })
        }).fail(err=>{
          console.log(err);
        }); 
      }
    });
  }

</script>
@endsection