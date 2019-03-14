@extends('layouts.admin')

@section('content')

<section>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box noradius noborder bg-default">
                                    <i class="fa fa-money float-right text-white" style="font-size: 20px"></i>
                                    <h6 class="text-white text-uppercase m-b-20">Iuran</h6>
                                    <h4 class="m-b-20 text-white">
                                     <?php
                                     function format_uang($angka){
                                        $hasil = "Rp. " . number_format($angka,2,',','.');
                                        return $hasil;
                                    }
                                    echo format_uang($countributions);

                                    ?>
                                </h4>
                                <span class="text-white">Total Seluruh Iuran</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-warning">
                                <i class="fa fa-group float-right text-white" style="font-size: 20px"></i>
                                <h6 class="text-white text-uppercase m-b-20">Warga</h6>
                                <h4 class="m-b-20 text-white counter">{{$members->count()}}</h4>
                                <span class="text-white">Total Data Warga</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-success">
                                <i class="fa fa-id-badge float-right text-white" style="font-size: 20px"></i>
                                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                                <h4 class="m-b-20 text-white counter">{{$users->count()}}</h4>
                                <span class="text-white">Total Data Users</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box noradius noborder bg-danger">
                                <i class="fa fa-id-card float-right text-white" style="font-size: 20px"></i>
                                <h6 class="text-white text-uppercase m-b-20">Petugas</h6>
                                <h4 class="m-b-20 text-white counter">{{$officers->count()}}</h4>
                                <span class="text-white">Total Data Petugas</span>
                            </div>
                        </div>
                    </div>
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
        if({!! $login !!}){
            swal("Selamat Datang :)","Anda Login Sebagai Admin","success");
        }
    });
</script>