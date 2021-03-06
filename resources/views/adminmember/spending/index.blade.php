@extends('layouts.member')
@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Data Pengeluaran</h2>
</div>
</div>
<section>

    <div class="container-fluid">
            <div class="card">
               <div class="card-header border-primary">
                  <i class="fa fa-flag"></i> List Pengeluaran
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-striped datatable" border="1">
                        <thead>
                           <tr>
                              <td>No</td>
                              <td style="text-align: center;">Nama Item</td>
                              <td style="text-align: center;">Jumlah Pengeluaran</td>
                              <td style="text-align: center;">Tanggal</td>
                              <td style="text-align: center;">Keterangan</td>
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
                            <td style="text-align: right;">{{ $rupiah }}</td>
                            <td>{{ $date }}</td>
                            <td>{{ $spending->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                  @php
                      function format_uang($angka){
                        $hasil = "Rp. " . number_format($angka,2,',','.');
                        return $hasil;
                      }
                      function pengurangan($a, $b){
                        $kurang= $a-$b;
                        return $kurang;
                      }
                  @endphp
                      <tr bgcolor="yellow">
                        <td>Total Pengeluaran</td><td></td>
                        <td style="text-align: right;">{{ format_uang($spend) }}</td>
                        <td></td><td></td>
                      </tr>
                      {{-- <tr>
                        <td>Total masukan/Iuran</td><td></td>
                        <td>{{ format_uang($countribution) }}</td>
                      </tr>
                      <tr>
                        <td>Total sisa Iuran</td><td></td>
                        <td>{{ pengurangan($countribution,$spend) }}</td>
                      </tr>     --}}          
                  
                </tfoot>
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