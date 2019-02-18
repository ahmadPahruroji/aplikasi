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
      {{--  --}}
      {{-- <form >
        <div class="row">
          <div class="col-2">
            
          </div>
          <div class="col-6">
            <div class="form-inline">
              <label>
                Tanggal
              </label> 
              <input type="date" class="form-control" name="date" placeholder="type something" required>
              <label>
                Tanggal Sampai
              </label>
              <input type="date" class="form-control" name="date" placeholder="type something" required>
              <button type="submit" class="btn btn-success">Search</button>
            </div>
          </div>
          <div class="col-2">
            
          </div>
        </div>
      </form> --}}

      <p>Cari Tanggal :</p>
      <form action="/export/cari" method="GET">
        <input type="date" name="cari" placeholder="Cari Tanggal .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
      </form>
      {{--  --}}
      <div id="printThis">
        <div id="konten">
          <div class="card">
           <div class="card-header border-primary">
            <i class="fa fa-flag"></i> List Pengeluaran

          </div>
          <div class="card-body">
            <div class="table-responsive">
             <table class="table table-striped example" id="example">
              <thead>
               <tr>
                <td>No</td>
                <td>Nama Item</td>
                <td>Jumlah Pengeluaran</td>
                <td>Tanggal</td>
                <td>Keterangan</td>
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
                <td>{{ $rupiah }}</td>
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
              <tr>
                <td>Total Pengeluaran</td><td></td>
                <td>{{ $spendings->sum('total') }}</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Total masukan/Iuran</td><td></td>
                <td>{{ format_uang($countributions) }}</td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Total sisa Iuran</td><td></td>
                <td>{{ format_uang(pengurangan($countributions,$spendings->sum('total'))) }}</td>
                <td></td>
                <td></td>
              </tr>              
            </tfoot>
          </table>
          <br/>
     {{--  @php
      $rupiah = "Rp " . number_format($spendings->total,2,',','.');
      @endphp --}}
      {{-- Jumlah Pengeluaran: Rp. {{ $spendings->sum('total') }} <br/> --}}
      {{-- Total sisa Iuran: Rp.{{ pengurangan($countributions,$spendings) }} <br/> --}}
  {{-- Halaman : {{ $spendings->currentPage() }} <br/>
  Jumlah Data : {{ $spendings->total() }} <br/>
  Jumlah Pengeluaran : Rp. {{ $spendings->sum('total') }} <br/>
  Data Per Halaman : {{ $spendings->perPage() }} <br/>
  --}}

  {{-- {{ $spendings->links() }} --}}
</div>
</div>
</div>
<div id ="editor"> </div>

</div>
<a class="btn btn-primary" href="{{ url('export/pdf') }}" target="_blank"><i class="fa fa-print-o"></i> Cetak Data</a>
{{-- <button type="button" name="button" class="btn btn-info btn-block" onclick="print_now()">Print Now</button> --}}
</div>
</div>
</div>

</section>
@endsection
@section('script')
<script type="text/javascript">
  $('#example').tableExport( {
    dom: 'Bfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  } );
</script>


<script type="text/javascript">
  var doc = new jsPDF();
  var specialElementHandlers = {
    '#editor': function (element, renderer) {
      return true;
    }
  };
  $('#change').click(function () {
    doc.fromHTML($('#konten').html(), 15, 15, {
      'width': 100,'border': 1,
      'elementHandlers': specialElementHandlers
    });
    doc.save('contoh.pdf');
  });

  function print_now(){
    $("#printThis").printThis();
  }
</script>

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