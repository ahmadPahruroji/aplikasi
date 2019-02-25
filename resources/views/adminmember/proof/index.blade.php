@extends('layouts.member')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Data Bukti Pembayaran</h2>
</div>
</div>

<section>

    <div class="container-fluid">
        {{-- <div class="card"> --}}
            {{-- <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Bukti Pembayaran </h3>
            </div> --}}
            <div class="card">
                <div class="card-header border-primary">
                    <i class="fa fa-flag"></i> List Bukti Pembayaran
                    <a href="{{ route('proofusers.create') }}" type="button" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>

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
                                    <td>Keterangan</td>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($proofs as $p => $proof)
                             <tr>
                             <td>{{ $p+1 }}</td>
                             <td>{{ $proof->user->name }}</td>
                             <td>
                                 <img src="{{ asset('storage/'.$proof->image) }}" class="rounded mx-auto d-block" width="50">
                             </td>
                             <td>{{ $proof->date }}</td>
                             <td>{{ $proof->description }}</td>
                             </tr>
                             @endforeach
                      </tbody>
                  </table>
              </div>   
          </div>
      </div>
  {{-- </div> --}}
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
                $.post("proofusers/"+id,access)
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