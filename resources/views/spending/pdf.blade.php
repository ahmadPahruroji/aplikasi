<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Laporan Pengeluaran</title>
		<body>
			<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
				.tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
				.tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
				.tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
				.tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
			</style>

			<div style="font-family:Arial; font-size:12px;">
				<center><h2>LAPORAN PENGELUARAN</h2></center>	
			</div>
			<br>
			<table class="tg">
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
                <td>{{ format_uang($spendings->sum('total')) }}</td>
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
                <td>{{ pengurangan($countributions,$spendings->sum('total')) }}</td>
                <td></td>
                <td></td>
              </tr>              
            </tfoot>
			</table>
		</body>
	</head>
</html>