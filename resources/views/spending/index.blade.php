@extends('layouts.admin')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    {{-- <h2 class="h5 no-margin-bottom">Data Pengeluaran</h2> --}}
</div>
</div>
<section>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary mb-3 text-white" style="color: #6194c1">
                <h3> Data Pengeluaran </h3>
            </div>
            <div class="card">
               <div class="card-header border-primary">
                  <i class="fa fa-flag"></i> List Pengeluaran
                  <a href="{{ route('spendings.create') }}" role="button" class="btn btn-success pull-right" data-toggle="tooltip" data-placement="right" title="Tambah Data"><i class="fa fa-plus"></i></a>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped datatable">
                        <thead>
                           <tr>
                              <td>No</td>
                              <td>Nama Item</td>
                               <td>Qty</td>
                              <td>Jumlah Pengeluaran</td>
                              
                              <td>Tanggal</td>
                              <td>Keterangan</td>
                              <td>Action</td>
                          </tr>
                      </thead>
                      <tbody>

                        @foreach ($spendings as $sp => $spending)
                        @php
                        setlocale (LC_TIME, 'ID');
                        $date = strftime( "%d %B %Y", strtotime($spending->date));
                        
                        // rupiah //
                        $rupiah = "Rp " . number_format($spending->total,2,',','.');
                        @endphp

                        <tr>
                            <td>{{ $sp+1 }}</td>
                            <td>{{ $spending->category->name }}</td>
                             <td>{{ $spending->qty }}</td>
                            <td style="text-align: right;">{{ $rupiah }}</td>
                            <td>{{ $date }}</td>
                            <td>{{ $spending->description }}</td>
                            <td>
                             <center>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger" onclick="destroy({{$spending->id}})" data-toggle="tooltip" data-placement="right" title="Hapus Data"><i class="fa fa-trash"></i></button>

                                    <a href="{{ route('spendings.edit',$spending->id) }}" role="button" class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="Edit Data"><i class="fa fa-gear"></i></a>
                                    
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
                $.post("{{ url('spendings') }}/"+id,access)
                .done(res=>{
                    console.log(res);
                    swal({
                        title:"Oke",
                        text:"Anda menghapus Data",
                        type:"success",
                    }).then(result=>{
                        window.location = "{{ url('spendings') }}";
                    })
                }).fail(err=>{
                    console.log(err);
                }); 
            }
        });
    }

</script>
@endsection