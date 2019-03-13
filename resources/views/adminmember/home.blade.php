@extends('layouts.member')

@section('content')
<div class="page-header">
  <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Dashboard</h2>
  </div>
</div>
<?php
// ini_set( 'display_errors', 1 );   
//     error_reporting( E_ALL );
//     $to   = $users->email;
//     $judul  = "Waktu Pembayaran Iuran";
//     $dari = "From: lnitwelve@gmail.com \n";
//     $dari .= "Content-type: text/html \r\n";
                                                    
//     $pesan  = "Waktu pembayaran Iuran sudah dimulai. Silahkan melakukan pembayaran. <br />";
//     if (date('d') == "18" ){
                                                         
//     @mail($to, $judul, $pesan, $dari);
//     }
?>


<!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="fa fa-user"></i></div>
                    <div class="title"><span>Profil</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>25</strong>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="fa fa-fw fa-credit-card"></i></div>
                    <div class="title"><span>Pengeluran</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><h4>
                      {{--  --}}
                    </h4>
                  </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="fa fa-money"></i></div>
                    <div class="title"><span>Iuran</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><h4>
                      
                    </h4>

                      <?php

                                                // @if($countributions->date != null)
                                                  //   $masaaktif = $countributions->date; 
                                                  //   $sekarang = date("d-m-Y"); 
                                                  //   $masaberlaku = strtotime($masaaktif) - strtotime($sekarang); 

                                                  //   @if($masaberlaku/(24*60*60)<1)  
                                                  //       echo "<font color='red'><font size=1>Masa Berlaku Sudah Habis!!!"; 
                                    
                                                  //    @elseif($masaberlaku/(24*60*60)<8) 
                                                  //       echo "".$masaberlaku/(24*60*60)." hari lagi"; 
                                                  //       echo "<font color='blue'><font size=1><b>Masa Berlaku akan Habis!!!</b></font>"; 
                                                  // @endif
                                                

?>

                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="fa fa-fw fa-comment"></i></div>
                    <div class="title"><span>Keluhan</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>50</strong></div>
                  </div>
                </div>
              </div>
              <div id="googleMap" style="width:100%;height:380px;"></div>
            </div>

          </section>

@endsection
@section('script')
<script type="text/javascript">
    $(()=>{
        if({!! $login !!}){
            swal("Hello :)","Kamu Login sebagai Member","success");
        }
    });
</script>
@endsection
