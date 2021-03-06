@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Data Kegiatan</h2> --}}
  </div>
</div>

<section>

  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
        <h3> Data Kegiatan </h3>
      </div>
      <div class="card">
        <div class="card-header border-primary">
          <i class="fa fa-flag"></i> List Kegiatan
          <a href="{{ route('events.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped datatable">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Nama Kegiatan</td>
                  <td>Gambar</td>
                  <td>Tanggal</td>
                  <td>Keterangan</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
               @foreach ($events as $e => $event)
               @php
               setlocale (LC_TIME, 'ID');
               $date = strftime( "%d %B %Y", strtotime($event->date));
               @endphp

               <tr>
                 <td>{{ $e+1 }}</td>
                 <td>{{ $event->name }}</td>
                 <td class="zoom">
                  <img data-toggle="magnify" src="{{ asset('storage/'.$event->image) }}" class="rounded mx-auto d-block" width="50">
                </td>
                <td>{{ $date }}</td>
                <td>{{ $event->description }}</td>
                <td>
                  <button type="button" class="btn btn-danger" onclick="destroy({{$event->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button> 

                  <a href="{{ route('events.edit',$event->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a>
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
{{--  --}}
<script type="text/javascript">
    $(document).ready(function() {
        $(".zoom").fancybox();
    });
</script>
{{--  --}}
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
        $.post("events/"+id,access)
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